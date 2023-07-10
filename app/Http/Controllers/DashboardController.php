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
        $id=Auth::guard('nasabah')->user()->id ;
        $saldo=Auth::guard('nasabah')->user()->saldo ;
        $value=Auth::guard('nasabah')->user();

        $total_pengajuan_sampah = DB::table('tbl_pengajuan_sampah')
        ->select(DB::raw('SUM(berat) as total_sampah'))
        ->where('id_nasabah', $id)
        ->where('status', 0)
        ->first();

        $total_pengajuan_emas = DB::table('tbl_pengajuan_emas')
        ->select(DB::raw("SUM(nominal_pengajuan) as total_uang"),DB::raw('SUM(berat_emas) as total_emas'))
        ->where('id_nasabah', $id)
        ->where('status', 1)
        ->first();
        // $value =Auth::logout();
        // Session::flush();
        // dd($value);
        // $saldo = DB::table('tbl_nasabah')
        // ->where('id', $id)
        // ->first();

        return view('dashboard', compact('saldo','total_pengajuan_sampah','total_pengajuan_emas'));
        // setiap abis koma fun view ngelempar data ke "viewnya / blade"
    }

    public function index_admin()
    {
        // $value =Auth::guard('nasabah')->getSession() ;
        $id=Auth::guard('admin')->user()->id ;
        $value=Auth::guard('admin')->user() ;

        $total_pengajuan_sampah = DB::table('tbl_pengajuan_sampah')
        ->select(DB::raw('COUNT(id) as total_pengajuan_sampah'))
        ->where('status', 0)
        ->first();

        $total_pengajuan_emas = DB::table('tbl_pengajuan_emas')
        ->select(DB::raw("COUNT(id) as total_pengajuan_emas"))
        ->where('status', 0)
        ->first();
        // $value =Auth::logout();
        // Session::flush();
        // dd($value);
        // $saldo = DB::table('tbl')
        // ->where('id', $id)
        // ->first();

        return view('dashboard_admin', compact('total_pengajuan_sampah','total_pengajuan_emas'));
        // setiap abis koma fun view ngelempar data ke "viewnya / blade"
    }



}
