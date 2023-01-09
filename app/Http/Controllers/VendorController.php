<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\User;
use App\Notifications\VendorCreateNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::orderBy('id','ASC')->paginate(20);
             return view('vendor.index',compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $users = User::orderBy('name','ASC')->get();
       return view('vendor.create',compact('users'));
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

        if ($request->hasFile('image')) {
            // $image_name = $request->image->getClientOriginalName();
            // $path = $request->image->move(public_path() . '/images/vendors', $image_name);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = Str::random(20).'.'.$extension;
            $request->file('image')->storeAs('public_html/images/vendors', $fileName);
        } else {
            $image_name = null;
            $path = null;
        }

        $vendor = new Vendor;
        $vendor->vendor_name = $request->vendor_name;
        // $vend = User::find($request->user_id);
        $vendor->email = $request->email;
        $vendor->phone_no = $request->phone_no;
        $vendor->user_id = $request->user_id;
        $vendor->vendor_logo = $image_name;
        $vendor->location = $request->location;
        $vendor->till_no = $request->tillno;
        // $vendor->password = Hash::make('swyft2eat');

        try {
            $vendor->save();

            $vendor->notify(new VendorCreateNotification());

            return redirect('vendors')->withStatus(__('New vendor created successfully'));
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


        if ($request->hasFile('image')) {
            $image_name = $request->image->getClientOriginalName();
            $path = $request->image->move(public_path() . '/images/vendors', $image_name);
        } else {
            $image_name = null;
            $path = null;
        }

        $vendor = Vendor::find($request->id);
        $vendor->vendor_name = $request->vendor_name;
        $vendor->email = $request->email;
        $vendor->phone_no = $request->phone_no;
        $vendor->user_id = $request->user_id;
        $vendor->vendor_logo = $image_name;
        $vendor->location = $request->location;
        try{
            $vendor->save();
            return redirect()->route('vendor.index')->with('success', 'Profile Successfully Updated');

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
        return redirect()->route('vendor.index')->with('success', 'Vendor deleted successfully');
    }

    public function vendor_login(Request $request) {
        return view('vendor.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('vendor')->attempt($credentials)) {
            // return response()->json(Auth::guard('vendor')->user());
            return redirect()->intended('/home');


            // return redirect()->intended('/home')
            //                     ->withSuccess("You have successfully logged in");
        } else {
            return 'Bad Creds';
        }



        // $vendor = Vendor::where('email', $request->email)->first();

        // if(!is_null($vendor)) {
        //     if(Hash::check($request->password, $vendor->password)) {
        //         // return 'Succesfull';
        //         return response()->json(Auth::user());
        //         return redirect()->route('/home');

        //         // return redirect()->intended('/orders')
        //         //                 ->withSuccess("You have successfully logged in");
        //     } else {
        //         return 'Not successful';
        //         // return redirect("/vendorLogin")
        //         //     ->withFail('Oppes! You have entered invalid credentials');
        //     }
        // }
        // return redirect("/vendorLogin")
        //     ->withFail('Oppes! You have entered invalid credentials');
    }

    public function change_status($id) {
        $vendor = Vendor::find($id);

        if ($vendor->status == 0) {
            $vendor->status = 1;
            $vendor->save();
        } else {
            $vendor->status = 0;
            $vendor->save();
        }

        return redirect()->back();
    }
}
