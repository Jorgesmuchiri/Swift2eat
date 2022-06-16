<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Roles;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Vendor;

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



}
