<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role_id == 1) {
            $products = Products::orderBy('id','ASC')->paginate(20);

            return view('products.index',compact('products'));
        } else if(Auth::user()->role_id == 2) {
            $products = Products::where('vendor_id', '=', Auth::id())->paginate(20);

            return view('products.index',compact('products'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $category = Categories::orderBy('category_name','ASC')->get();
        $vendors = Vendor::orderBy('vendor_name','ASC')->get();

       return view('products.create',compact('category','vendors'));
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
            'product_name' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image_name = $request->image->getClientOriginalName();
            $path = $request->image->move(public_path() . '/images/product', $image_name);
        } else {
            $image_name = null;
            $path = null;
        }

        $products = new Products;
        $products->product_name = $request->product_name;
        $products->quantity = $request->quantity;
        $products->price = $request->price;
        $products->category_id = $request->category_id;
        if (Auth::user()->role_id == 1) {
            $products->vendor_id = $request->vendor_id;
        } else {
            $vendor = Vendor::where('user_id', '=', Auth::id())->first();
            $products->vendor_id = $vendor->id;
            // $products->vendor_id = Auth::id();
        }
        $products->image =  $image_name;

        try {
            $products->save();
            return redirect()->route('products.index');
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
        $products = Products::find($id);
        return view('products.show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::find($id);
        // return response()->json($product);
        $category = Categories::orderBy('category_name','ASC')->get();
        $vendors = Vendor::orderBy('vendor_name','ASC')->get();
        // return response()->json($products);
        return view('products.edit',compact('product', 'category', 'vendors'));
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
        // $request->validate([
        //     'products_name' => 'required',
        // ]);

        // dd(1);
        $products = new Products;

        $product = Products::find($request->id);

        $product->product_name = $request->product_name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;

        if ($request->edited_category) {
            $product->category_id = $request->category_id;
            // dd('Category Edited');
        } else {
            $product->category_id = $product->category_id;
            // dd('Category not edited');
        }

        if ($request->hasFile('image')) {
            $image_name = $request->image->getClientOriginalName();
            $path = $request->image->move(public_path() . '/images/vendors', $image_name);
        } else {
            $image_name = $product->image;
        }

        // dd('All Failed');

        $product->vendor_id = $request->vendor_id;
        $product->image = $image_name;
        try{
            $product->save();
            return redirect()->route('products.index');

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
        $products = Products::findOrFail($id);
        $products->delete();
        return redirect()->route('products.index');
    }
}
