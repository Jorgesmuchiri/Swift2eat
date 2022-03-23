<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendors::orderBy('id','ASC')->get();
             return view('vendors.index',compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendors.create');

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
            'vendor_name' => 'required',
        ]);
       
        $vendors = Vendors::whereId($request->id)->first();
        $vendors->vendor_name = $request->vendor_name;
        $vendors->order_id = $request->order_id;
        $vendors->user_id = $request->user_id;
        try{
            $vendors->save();
            return redirect()->route('vendors.index');

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
        $Vendors = Vendors::find($id);
        return view('vendors.show',compact('Vendors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendors = Vendors::find($id);
        // return response()->json($categories);
        return view('vendors.edit',compact('vendors'));
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
            'vendor_name' => 'required',
        ]);
       
        $vendors = Vendors::whereId($request->id)->first();
        $vendors->vendor_name = $request->vendor_name;
        $vendors->order_id = $request->order_id;
        $vendors->user_id = $request->user_id;
        try{
            $vendors->save();
            return redirect()->route('vendors.index');

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
        $vendors = Vendors::findOrFail($id);
        $vendorsendors->delete();
        return redirect()->route('vendors.index');
    }
}
