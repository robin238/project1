<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;


class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = \App\Models\Nasabah::get();
        return view('nasabah', compact('data'));
        // setiap abis koma fun view ngelempar data ke "viewnya / blade"
    }

    public function detail ($id)
    {
        $data = \App\Models\Nasabah::where('id', '=' ,$id)->first();
        return view('nasabah_detail',compact('data'));
    }


  
}
