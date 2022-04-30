<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Roles;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

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




}
