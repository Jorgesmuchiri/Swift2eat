<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Orders;
use App\Models\Vendor;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::user()->role_id == 1) {
            $users = User::count();
            $orders = Orders::count();
            $vendors = Vendor::count();
            $products = Products::count();

            return view('dashboard', compact('users', 'orders', 'vendors', 'products'));
        } elseif (Auth::user()->role_id == 2) {
            $vendor = Vendor::where('user_id', '=', Auth::id())->first();

            $products = Products::where('vendor_id', '=', $vendor->id)->count();
            $orders = Orders::where('vendor_id', '=', $vendor->id)->count();

            // $notifications = auth()->user()->unreadnotifications->count();

            // return response()->json($notifications);

            return view('dashboard', compact('products', 'orders'));
        } else {
            $vendors = Vendor::whereStatus(1)->get();

            $products = Products::with('vendors')->get();


            return view('welcome',compact('vendors','products'));
        }


    }

    public function markNotification() {
        $notifications = auth()->user()->notifications;

        $notifications->markAsRead();

        return redirect()->route('orders.index');
    }
}
