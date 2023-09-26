<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\PengajuanSampah;
use Auth;
use DB;
use Session;
use Carbon\Carbon;
use PDF;

class PengajuanSampahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PengajuanSampah::get();
        return view('pengajuan_sampah/pengajuan_sampah', compact('data'));
        // setiap abis koma fun view ngelempar data ke "viewnya / blade"
    }

    // public function detail ($id)
    // {
    //     $data = \App\Models\Nasabah::where('id', '=' ,$id)->first();
    //     return view('nasabah_detail',compact('data'));
    // }

    public function input()
    {
        $jenis_sampah = DB::table('tbl_sampah')
            ->select('id', 'sampah', 'harga_per_kg')
            ->get();

        return view('pengajuan_sampah/input', compact('jenis_sampah'));
        // setiap abis koma fun view ngelempar data ke "viewnya / blade"
    }

    public function store(Request $request)
    {
        $current_timestamp = Carbon::now();
        // insert data ke table pegawai
        $pengajuan = DB::table('tbl_pengajuan_sampah')->insertGetId([
            'id_nasabah' => 69,
            'id_sampah' => 1,
            'harga_pengajuan_sampah' => $request->harga,
            'jumlah_sampah' => 5,
            'berat' => $request->berat,
            'jumlah_rupiah' => $request->jumlah_uang,
            'status' => 0,
            'created_at' =>  $current_timestamp,
        ]);



        // alihkan halaman ke halaman pegawai
        return redirect('/pengajuan_sampah');
        // setiap abis koma fun view ngelempar data ke "viewnya / blade"
    }

    public function cek_harga(Request $request)
    {
        $harga_sampah = DB::table('tbl_sampah')
            ->select('id', 'sampah', 'harga_per_kg')
            ->where('id', '=', $request->id_sampah)
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil diambil!',
            'data' => $harga_sampah,
        ]);

        // setiap abis koma fun view ngelempar data ke "viewnya / blade"
    }

    // method untuk edit data pengajuan_sampah
    public function edit($id)
    {
        // mengambil data pengajuan_sampah berdasarkan id yang dipilih
        $pengajuan_sampah = DB::table('tbl_pengajuan_sampah')
            ->where('id', $id)
            ->first();
        // dd($pengajuan_sampah);

        $jenis_sampah = DB::table('tbl_sampah')
            ->select('id', 'sampah', 'harga_per_kg')
            ->get();
        // passing data pengajuan_sampah yang didapat ke view update.blade.php
        return view('pengajuan_sampah/edit', compact('pengajuan_sampah', 'jenis_sampah'));
    }

    // update data pengajuan_sampah
    public function update(Request $request)
    {
        // update data pengajuan_sampah
        DB::table('tbl_pengajuan_sampah')
            ->where('id', $request->id)
            ->update([
                'id_nasabah' => 69,
                'id_sampah' => 1,
                'harga_pengajuan_sampah' => $request->harga,
                'jumlah_sampah' => 5,
                'berat' => $request->berat,
                'jumlah_rupiah' => $request->jumlah_uang,
            ]);
        // alihkan halaman ke halaman pengajuan_sampah
        return redirect('/pengajuan_sampah');
    }

    // hapus sementara
    public function delete($id)
    {
        $pengajuansampah = PengajuanSampah::find($id);
        $pengajuansampah->delete();

        return redirect('/pengajuan_sampah');
    }

    public function getpengajuan($id)
    {
        // mengambil data pengajuan_sampah berdasarkan id yang dipilih
        $pengajuan_sampah = DB::table('tbl_pengajuan_sampah')
            ->where('id', $id)
            ->first();
        // dd($pengajuan_sampah);

        $jenis_sampah = DB::table('tbl_sampah')
            ->select('id', 'sampah', 'harga_per_kg')
            ->get();
        // passing data pengajuan_sampah yang didapat ke view update.blade.php
        return view('pengajuan_sampah/approve', compact('pengajuan_sampah', 'jenis_sampah'));
    }

    //Approve
    public function approve(Request $request)
    {
        // approve data pengajuan sampah

        $approve =DB::table('tbl_pengajuan_sampah')
            ->where('id', $request->id)
            ->update([
                'status' => $request->approve,
            ]);

        $pengajuan_sampah = DB::table('tbl_pengajuan_sampah')
        ->where('id', $request->id)
        ->first();

        if($request->approve==1){

            $getsaldo = DB::table('tbl_nasabah')
            ->where('id', $pengajuan_sampah->id_nasabah)
            ->first();

            $total = $pengajuan_sampah->jumlah_rupiah + $getsaldo->saldo;
            $update_saldo =DB::table('tbl_nasabah')
            ->where('id', $getsaldo->id)
            ->update([
                'saldo' => $total,
            ]);
        }

        // alihkan halaman ke halaman pengajuan sampah
        return redirect('/pengajuan_sampah');
    }

    public function pdf($id)
	{

        $ids= Auth::guard('nasabah')->user()->id ;

        // $saldo=Auth::guard('nasabah')->user()->saldo ;
        // $value=Auth::guard('nasabah')->user();


	    $data = [
	            'title' => 'How To Create PDF File Using DomPDF In Laravel 9 - Techsolutionstuff',
	            'date' => date('d/m/Y'),
	            'users' => $ids
	    ];

	    // if($request->has('download'))
	    // {
	        $pdf = PDF::loadView('pengajuan_sampah/pdf',$data);
	        // return $pdf->download('users_pdf_example.pdf');
	        return $pdf->stream('users_pdf_example.pdf');
	    // }

	    // return view('pengajuan_sampah/pdf',compact('user'));
	}

}