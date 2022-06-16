<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Models\Customers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Symfony\Component\HttpFoundation\Session\Session;

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

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role_id == 3) {
                return redirect()->intended('/')
                            ->withSuccess("You have successfully logged in");
            } else {
                return redirect()->intended('/home')
                            ->withSuccess("You have successfully logged in");   
            }
        }

        return redirect("/")
                ->withFail('Oppes! You have entered invalid credentials');

    }

    public function logout(Request $request) {
        $request->session()->flush();

        Auth::logout();

        return redirect()->intended('/')
                        ->withSuccess("You have successfully logged out");
    }
}
