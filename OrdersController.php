<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Orders::orderBy('id','ASC')->get();
        return view('orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
        ]);
        $Orders = new Orders;
        $Orders->id = $request->ID;
        $Orders->order_id = $request->order_id;
        $Orders->cart_id = $request->cart_id;
        $Categories->product_id = $request->product_id;
        $Orders->vendor_id = $request->vendor_id;
        $Orders->customer_id = $request->customer_id;
        try {
            $Orders->save();
            return redirect()->route('orders.index');
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Orders = Orders::find($id);
        return view('orders.show',compact('Orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $corders = Orders::find($id);
        // return response()->json($categories);
        return view('orders.edit',compact('orders'));
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
       
        $request->validate([
            'order_id' => 'required',
        ]);
        $Orders = new Orders;
        $Orders->id = $request->ID;
        $Orders->order_id = $request->order_id;
        $Orders->cart_id = $request->cart_id;
        $Categories->product_id = $request->product_id;
        $Orders->vendor_id = $request->vendor_id;
        $Orders->customer_id = $request->customer_id;
        try {
            $Orders->save();
            return redirect()->route('orders.index');
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = Orders::findOrFail($id);
        $orders->delete();
        return redirect()->route('orders.index');
    }
}
