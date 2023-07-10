<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;
use DB;


class DashboardController extends Controller
{

    public function index()
    {
        // $value =Auth::guard('nasabah')->getSession() ;
        $value =Auth::guard('nasabah')->user()->id ;
        // $value =Auth::logout();
        // Session::flush();
        // dd($value);
        // $saldo = DB::table('tbl_nasabah')
        // ->where('id', $id)
        // ->first();


        return view('dashboard');
        // setiap abis koma fun view ngelempar data ke "viewnya / blade"
    }



}