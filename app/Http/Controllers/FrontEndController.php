<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Vendor;
Use App\Models\Products;
Use App\Models\Review;

use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

   $vendors = Vendor::whereStatus(1)->get();

   $products = Products::with('vendors')->get();


   return view('welcome',compact('vendors','products'));



    }



    public function restaurant_detail($id){


        $vendors = Vendor::wherestatus(1)->whereid($id)->with('products.category')->first();

        $products = Products::with('vendors')->get();


        $orders = Orders::with('products')->where('vendor_id','=',$vendors->id)->get();

        $reviews = Review::with('vendors')->where('vendor_id','=',$vendors->id)->get();


        return view('restaurant-detail',compact('vendors','products','orders','reviews'));


        // return response()->json($orders);

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




    public function create_account($data)

    {

        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);

        try {
            $user->save();

            return redirect('vendors')->withStatus(__('New user created successfully'));
        }catch (\Illuminate\Database\QueryException $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
