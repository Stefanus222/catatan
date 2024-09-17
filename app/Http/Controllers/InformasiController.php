<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InformasiController extends Controller
{
    //
    public function validasi1(){
        $info = 1;
        return view("informasi.validasi",compact("info"));
    }
    public function validasi2(){
        $info = 2;
        return view("informasi.validasi",compact("info"));
    }

    public function salah(){
        return view('informasi.salah');
    }

    public function akhiriSesi(){
        $info = 1;
        return view('informasi.utama',compact('info'));
    }

}
