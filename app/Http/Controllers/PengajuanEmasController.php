<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\HargaEmas;
use DB;
use Session;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;


class PengajuanEmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\Models\PengajuanEmas::get();
        return view('pengajuan_emas/pengajuan_emas', compact('data'));
        // setiap abis koma fun view ngelempar data ke "viewnya / blade"
    }

    // public function detail ($id)
    // {
    //     $data = \App\Models\Nasabah::where('id', '=' ,$id)->first();
    //     return view('nasabah_detail',compact('data'));
    // }

    public function input()
    {
        $harga_emas = DB::table('tbl_harga_emas')->latest('id')->first();;

        return view('pengajuan_emas/input', compact('harga_emas'));
        // setiap abis koma fun view ngelempar data ke "viewnya / blade"
    }

    public function store(Request $request)
    {

        $current_timestamp = Carbon::now();
        // insert data ke table pegawai
        DB::table('tbl_pengajuan_emas')->insert([
            'id_nasabah' => 69,
            'id_harga_emas' => $request->id_harga,
            'harga_emas' => $request->harga,
            'nominal_pengajuan' => $request->nominal,
            'berat_emas' => $request->jumlah_emas,
            'status' => 0,
            'created_at' => $current_timestamp,

        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('pengajuan_emas/input');
        // return view('pengajuan_emas/input');
        // setiap abis koma fun view ngelempar data ke "viewnya / blade"
    }



    public function cek_harga(Request $request)
    {
        $harga_emas = DB::table('tbl_emas')
            ->select('id', 'emas', 'harga_per_kg')
            ->where('id', '=', $request->id_emas)
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil diambil!',
            'data' => $harga_emas,
        ]);

        // setiap abis koma fun view ngelempar data ke "viewnya / blade"
    }

    // method untuk edit data pengajuan_emas
    public function edit($id)
    {
        // mengambil data pengajuan_emas berdasarkan id yang dipilih
        $pengajuan_emas = DB::table('tbl_pengajuan_emas')
            ->where('id', $id)
            ->first();
        // dd($pengajuan_emas);

        // $jenis_emas = DB::table('tbl_emas')
        //     ->select('id', 'emas', 'harga_per_kg')
        //     ->get();
        // passing data pengajuan_emas yang didapat ke view update.blade.php
        return view('pengajuan_emas/edit', compact('pengajuan_emas'));
    }

    // update data pengajuan_emas
    public function update(Request $request)
    {
        // update data pengajuan_emas
        DB::table('tbl_pengajuan_emas')
            ->where('id', $request->id)
            ->update([
                'id_nasabah' => 69,
                'id_harga_emas' => $request->id_harga,
                'harga_emas' => $request->harga,
                'nominal_pengajuan' => $request->nominal,
                'berat_emas' => $request->jumlah_emas,
            ]);
        // alihkan halaman ke halaman pengajuan_emas
        return redirect('/pengajuan_emas');
    }

    // method untuk edit data pengajuan_emas
    public function edit_approve($id)
    {
        // mengambil data pengajuan_emas berdasarkan id yang dipilih
        $pengajuan_emas = DB::table('tbl_pengajuan_emas')
            ->where('id', $id)
            ->first();
        // dd($pengajuan_emas);

        // $jenis_emas = DB::table('tbl_emas')
        //     ->select('id', 'emas', 'harga_per_kg')
        //     ->get();
        // passing data pengajuan_emas yang didapat ke view update.blade.php
        return view('pengajuan_emas/approve', compact('pengajuan_emas'));
    }

    // update data pengajuan_emas
    public function update_approve(Request $request)
    {
        // update data pengajuan_emas
        DB::table('tbl_pengajuan_emas')
            ->where('id', $request->id)
            ->update([
                'status' => $request->status

            ]);

        if($request->status == 1){

            $pengajuan_emas = DB::table('tbl_pengajuan_emas')
            ->select('*')
            ->where('id', '=',$request->id)
            ->first();

            $nasabah = DB::table('tbl_nasabah')
            ->select('id', 'saldo')
            ->where('id', '=',$pengajuan_emas->id_nasabah)
            ->first();

            $saldo = $nasabah->saldo -  $pengajuan_emas->nominal_pengajuan;
            DB::table('tbl_nasabah')
            ->where('id', $pengajuan_emas->id_nasabah)
            ->update([
                'saldo' => $saldo
            ]);

        }
        toast('Your Post as been submited!','success');
        // alihkan halaman ke halaman pengajuan_emas
        return redirect('/pengajuan_emas');
    }

    // hapus sementara
    public function delete($id)
    {
        $pengajuanemas = Pengajuanemas::find($id);
        $pengajuanemas->delete();

        return redirect('/pengajuan_emas');
    }



}