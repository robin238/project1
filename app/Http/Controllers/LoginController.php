<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;


class LoginController extends Controller
{

    public function login()
    {
        return view('login');
    }


    public function actionLogin(Request $request)
    {
    //  return $request->all();
        Auth::logout();
        Session::flush();

        if (Auth::guard('nasabah')->attempt(['email_nasabah' => $request->email_login, 'password' => $request->password], $request->remember)) {
            return redirect()->to('dashboard');
        }

        if (Auth::guard('admin')->attempt(['email_user' => $request->email_login, 'password' => $request->password], $request->remember)) {
            return redirect()->to('dashboard_admin');
        }
        // return $request->all();


        // Session::flash('message', 'Akun belum terdaftar, silahkan daftar melalui menu daftar');
        // Session::flash('alert_class', 'danger');
        return redirect()->back();
    }

    public function checkLogin()
    {
        return response()->json(Auth::guard('nasabah')->user());

    }

    // public function Loginproses(Request $request)
    // {
    //     if(Auth::attempt($request->only('email','password'))){
    //      return redirect('/');
    //     }

    // }

      public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();

        return redirect('/login');
    }




}
