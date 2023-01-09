<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\Products;
use App\Models\Vendor;
use App\Notifications\OrderNotification;
use App\Models\User;
use Notification;
use App\Notifications\OrderCompleteNotification;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role_id == 1) {
            $orders = Orders::with('products', 'vendors', 'users')->paginate(20);

            // return response()->json($orders);

            // $products = Products::orderBy('id','ASC')->paginate(20);

            return view('orders.index',compact('orders'));

        } elseif (Auth::user()->role_id == 2) {
            $vendor = Vendor::where('user_id', '=', Auth::id())->first();
            $orders = Orders::with('products', 'vendors', 'users')->orderBy('status', 'DESC')->where('vendor_id', '=', $vendor->id)->paginate(20);
            // return response()->json($orders);

            return view('orders.index',compact('orders'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = session()->get('cart');

        foreach ($cart as $cart_item) {
            Orders::create([
                'product_id' => $cart_item['prod_id'],
                'customer_id' => Auth::id(),
                'quantity' => $cart_item['quantity'],
                'status' => 'Pending',
                'vendor_id' => $cart_item['vendor_id'],
                'total' => $cart_item['quantity'] * $cart_item['price'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'pickup_time' => $request['time'],
                'instruction' => $request['instruction'],
            ]);
        }
        $vendor = Vendor::find($cart_item['vendor_id']);
        $user_vendor = User::find($vendor->user_id);
        Notification::send($user_vendor, new OrderNotification($vendor));
        //$vendor->notify(new OrderNotification($vendor));

        // Delete the cart session after an order is made
        $request->session()->forget('cart');

        return redirect()->route('my_orders')->with('success', 'Order Placed successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order= Orders::find($id);

        if ($order->status == 'Pending') {
            $vendor = Vendor::where('id', '=', $order->vendor_id)->first();
            $user = User::find($order->customer_id);

            $order->status = 'Completed';

            $user->notify(new OrderCompleteNotification($vendor));
        } elseif ($order->status == 'Completed') {
            $order->status = 'Pending';
        }

        $order->save();

        return redirect()->back()->with('success', 'Order successfully updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Orders::findOrFail($id);

        $order->delete();
        return redirect()->back()->with('success', 'Order successfully deleted');
    }

    public function show_orders()
    {
        $orders = Orders::with('products')->where('customer_id', '=', Auth::id())->orderBy( 'status', 'DESC')->paginate(10);

        // return response()->json($orders);
        return view('my_orders', compact('orders'));
    }
}
