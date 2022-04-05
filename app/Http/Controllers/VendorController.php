<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Vendor = Vendor::orderBy('id','ASC')->get();
             return view('vendor.index',compact('vendor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('vendor.create');
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
        $vendor = new Vendor;
        $vendor->vendor_name = $request->vendor_name;
        $vendor->email = $request->email;
        $vendor->phone_no = $request->phone_no;
        $vendor->user_id = $request->user_id;

        try {
            $vendor->save();
            return redirect()->route('vendor.index');
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
        $vendor = Vendor::find($id);
        return view('vendor.show',compact('vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendor = vendor::find($id);
        // return response()->json($vendor);
        return view('vendor.edit',compact('vendor'));
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
       
        $vendor = Vendor::find($request->id);
        $vendor->vendor_name = $request->vendor_name;
        $vendor->email = $request->email;
        $vendor->phone_no = $request->phone_no;
        $vendor->user_id = $request->user_id;
        try{
            $vendor->save();
            return redirect()->route('vendor.index');

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
        $vendor = Vendor::findOrFail($id);
        $vendor->delete();
        return redirect()->route('vendor.index');
    }
}
