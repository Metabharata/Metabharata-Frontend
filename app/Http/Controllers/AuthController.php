<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'administrator') {
                return redirect('dashboard');
            } else {
                return redirect('orders');
            }
        }
        else{
            return view('login');
        }
    }
    public function actionlogin(Request $request){
        $credentials  = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $userData = User::where('id', '=', $user->id)->first();
    
            if ($userData->role === "administrator") {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('orders.index');
            }
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect()->route('login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
