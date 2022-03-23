<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banners;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Banners = Banners::orderBy('id','ASC')->get();
             return view('Banners.index',compact('Banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Banners.create');
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
            'Banners_name' => 'required',
        ]);
        $Banners = new Banners;
        $Banners->id = $request->ID;
        $Banners->Banners_name = $request->Banners_name;
        $Banners->product_id = $request->product_id;
        try {
            $Banners->save();
            return redirect()->route('Banners.index');
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
        $Banners = Banners::find($id);
        return view('Banners.show',compact('Banners'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Banners = Banners::find($id);
        // return response()->json($Banners);
        return view('Banners.edit',compact('Banners'));
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
            'Banners_name' => 'required',
        ]);
       
        $Banners = Banners::whereId($request->id)->first();
        $Banners->Banners_name = $request->Banners_name;
        try{
            $Banners->save();
            return redirect()->route('Banners.index');

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
        $Banners = Banners::findOrFail($id);
        $Banners->delete();
        return redirect()->route('Banners.index');
    }
}
