<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\Products;

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
            $orders = Orders::with('products', 'vendors', 'users')->where('vendor_id', '=', Auth::id())->paginate(20);

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
                'instruction' => $request['instruction'],
            ]);
        }

        // Delete the cart session after an order is made
        $request->session()->forget('cart');;

        return redirect()->back()->with('success', 'Order Placed successfully!');

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
            $order->status = 'Completed';
        } elseif ($order->status == 'Completed') {
            $order->status = 'Pending';
        }

        $order->save();

        return redirect()->back();
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
        //
    }
}
