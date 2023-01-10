<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showFormLogin(){
        return view('admin.auth.login');
    }

    public function login(AdminLoginRequest $request){
        $email = $request->get('email');
        $password = $request->get('password');

        if (Auth::guard('admin')->attempt([
            'email' => $email,
            'password' => $password
        ])){
            return redirect()->back()->with('error', 'Email hoặc mật khẩu không đúng');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
