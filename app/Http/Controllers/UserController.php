<?php

namespace App\Http\Controllers;

use App\Models\Pembudidaya;
use App\Models\LuasLahan;
use App\Models\BeratIdeal;
use App\Models\JenisPerairan;
use App\Models\JenisAir;
use App\Models\MasaPanen;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index(){
        return view('dataPembudidaya', [
            'pbd' => Pembudidaya::select('nama','jk','no_hp','email')->groupBy('nama','jk','no_hp','email')->get()
        ]);
    }

    public function standar(){
        return view('standarPembudidaya', [
            'pbd' => Pembudidaya::all()
        ]);
    }

    public function blog(){
        return view('User/blog');
    }

    public function contact(){
        return view('User/contact');
    }

    public function home(){
        return view('User/home');
    }

    public function konsultasi(){
        return view('User/konsultasi');
    }

    public function spk(){
        return view('User/spk', [
            'luasLahan' => LuasLahan::all(),
            'beratIdeal' => BeratIdeal::all(),
            'jenisPerairan' => JenisPerairan::all(),
            'jenisAir' => JenisAir::all(),
            'masaPanen' => MasaPanen::all()
        ]);
    }   
}
