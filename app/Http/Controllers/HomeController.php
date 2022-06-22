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
        } elseif (Auth::guard('vendor')->user()->role_id == 2) {
            $products = Products::where('vendor_id', '=', Auth::id())->count();
            $orders = Orders::where('vendor_id', '=', Auth::id())->count();

            return view('dashboard', compact('products', 'orders'));
        } else {
            $vendors = Vendor::whereStatus(1)->get();

            $products = Products::with('vendors')->get();


            return view('welcome',compact('vendors','products'));
        }

        
    }
}
