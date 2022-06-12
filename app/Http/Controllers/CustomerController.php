<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Models\Customers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CustomerController extends Controller
{
    public function create(CustomerRequest $request)
    {
        $data = $request->validated();

        $user = new User;

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->phone_no = $data['phone_no'];
        $user->role_id = 3;

        try {
            $user->save();

            return redirect()->route('welcome');
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // dd($request->email);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // dd('Welcome');
            return redirect()->intended('/')
                        ->withSuccess("You have successfully logged in");
        }

        // dd('Not Welcome');
        return redirect("/")
                ->withFail('Oppes! You have entered invalid credentials');

    }
}
