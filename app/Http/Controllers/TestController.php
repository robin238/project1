<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;


class TestController extends Controller
{
  
    public function test()
    {
        return view('test');
    }

   

}
