<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Roles;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;
use Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }



    public function create()
    {

        $roles = Roles::orderBy('role_name','ASC')->get();
        return view('users.create',compact('roles'));
    }


    public function store()
    {








    }

    public function change_role($id) {
        $user = User::find($id);
        if ($user->role_id == 3) {
            $user->role_id = 2;

            $vendor = new Vendor;

            $vendor->vendor_name = $user->name;
            $vendor->email = $user->email;
            $vendor->phone_no = $user->phone_no;
            $vendor->user_id = $user->id;
            $vendor->status = 1;

            $user->save();

            $check_vendor = Vendor::where('user_id', '=', $user->id)->get();
            if (!is_null($check_vendor)) {
                $vendor= Vendor::where('user_id', '=', $user->id)->update(['status' => 1]);
            } else {
                $vendor->save();
            }

            return redirect()->back();

        } elseif ($user->role_id == 2) {
            $user->role_id = 3;

            $vendor = Vendor::where('user_id', '=', $user->id)->update(['status' => 0]);

            $user->save();

            return redirect()->back();

        } else {
            return redirect()->back();
        }

    }

    public function delete($id) {
        $user = User::find($id);

        $user->delete();

        return redirect()->back();
    }

    public function forget_password(Request $request)
    {
        return view('auth.passwords.email');
    }

    public function forgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('auth.passwords.forgetPassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function showResetPasswordForm($token) {
        return view('auth.passwords.reset', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
                            ->where([
                            'email' => $request->email,
                            'token' => $request->token
                            ])
                            ->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
                    ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return redirect('/')->with('message', 'Your password has been changed!');
    }



}
