<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use AuthenticatesUsers;

    #Option
    public function login(){
        return view ('app.login');
    }

    public function register(){
        return view('app.register');
    }

    #Sistem Login
    public function doLogin(Request $request){
        $credential = $request->only('email', 'password');

        if (auth()->attempt($credential)) {
            return redirect()->route('main');
        } else {
            return redirect()->route('login')->with("error", 'Email dan Password anda tidak ditemukan');
        }
    }

    public function doLogout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('app.login')->with('sucsess', 'Anda berhasil login');
    }


#Sistem Register
    public function store(){
        $validate = $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ]);
        $data = $request->except('confirm-password', 'password');
        $data['password'] = UserController::make($request->password);
        User::create($data);
        return redirect('/login');

    }
}
