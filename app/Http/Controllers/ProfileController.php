<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Vendor;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        if (Auth::user()->role_id == 1) {
            return view('profile.edit');
        } elseif (Auth::user()->role_id == 2) {
            $vendor = Vendor::where('user_id', '=', Auth::id())->first();

            return view('profile.edit', compact('vendor'));
        }
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        if (Auth::user()->role_id == 1) {
            auth()->user()->update($request->all());

            return back()->withStatus(__('Profile successfully updated.'));
        } else {

            $vendor = Vendor::where('user_id', '=', Auth::id())->first();

            if ($request->hasFile('image')) {
                $image_name = $request->image->getClientOriginalName();
                $path = $request->image->move(public_path() . '/images/vendors', $image_name);
            } else {
                $image_name = $vendor->vendor_logo;
            }

            $vendor->vendor_name = $request->name;
            $vendor->email = $request->email;
            $vendor->phone_no = $request->phone_no;
            $vendor->location = $request->location;
            // $vendor->vendor_logo = $image_name;

            try{
                $vendor->save();
                return back()->withStatus(__('Profile Updated Successfully'));

            } catch (\Illuminate\Database\QueryException $e){
                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }
        }
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }
}
