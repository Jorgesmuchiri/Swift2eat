<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart:: orderBy('id','ASC')->get();
        return view('cart.index',compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cart.create');
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
        'cart_id' => 'required',
    ]);
    $Cart = new Cart;
    $Cart->id = $request->ID;
    $Cart->cart_id= $request->cart_id;
    $Cart->order_id = $request->order_id;
    $Cart->product_id = $request->product_id;
    $Cart->payment_id = $request->payment_id;
    try {
        $Cart->save();
        return redirect()->route('cart.index');
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
        $Cart = Cart::find($id);
        return view('cart.show',compact('Cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cart = Cart::find($id);
        // return response()->json($categories);
        return view('cart.edit',compact('cart'));
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
            'cart_id' => 'required',
        ]);
       
        $cart = Cart::whereId($request->id)->first();
        $cart->category_name = $request->category_name;
        $cart->order_id = $request->order_id;
        $cart->product_id = $request->product_id;
        $cart->payment_id = $request->payment_id;
        try{
            $cart->save();
            return redirect()->route('cart.index');

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
        $cart = Cart::findOrFail($id);
        $cart->delete();
        return redirect()->route('cart.index');
    }
}
