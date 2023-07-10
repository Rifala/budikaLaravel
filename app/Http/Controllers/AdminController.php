<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ikan;
use App\Models\LuasLahan;
use App\Models\BeratIdeal;
use App\Models\JenisPerairan;
use App\Models\JenisAir;
use App\Models\MasaPanen;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function index(){
        return view('dataIkan', [
            'ikann' => Ikan::all()
        ]);
    }

    public function dashboard(){
        return view('index3');
    }

    public function add() {
        return view('create',
        [
            'luasLahan' => LuasLahan::all(),
            'beratIdeal' => BeratIdeal::all(),
            'jenisPerairan' => JenisPerairan::all(),
            'jenisAir' => JenisAir::all(),
            'masaPanen' => MasaPanen::all()
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'namaIkan' => ['required', 'alpha_dash', 'max:50'],
            'deskripsi' => ['max:500']
        ], [
            'required' => 'Tidak boleh kosong',
            'alpha_dash' => 'Mengandung angka atau karakter spesial',
            'ascii' => 'Mengandung angka atau karakter spesial',
            'max' => 'Jumlah karakter melebihi batas',
        ]);
        

        $nama = $request->input('namaIkan');
        $luas = $request->input('luasLahan');
        $berat = $request->input('beratIdeal');
        $perairan = $request->input('jenisPerairan');
        $air = $request->input('jenisAir');
        $panen = $request->input('masaPanen');
        $desk = $request->input('deskripsi');

        
        $ikan = new Ikan;
        $ikan->nama_ikan = $nama;
        $ikan->luas_lahan_id = $luas;
        $ikan->berat_ideal_id = $berat;
        $ikan->jenis_perairan_id = $perairan;
        $ikan->jenis_air_id = $air;
        $ikan->masa_panen_id = $panen;
        $ikan->deskripsi = $desk;
        $ikan->save();


        return redirect('ikan');
    }

    public function edit($id){
        $ikan = Ikan::where('id', $id)->first();
        
        return view('update',
        [
            'ikan' => $ikan,
            'luasLahan' => LuasLahan::all(),
            'beratIdeal' => BeratIdeal::all(),
            'jenisPerairan' => JenisPerairan::all(),
            'jenisAir' => JenisAir::all(),
            'masaPanen' => MasaPanen::all()
        ]);
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'namaIkan' => ['required', 'max:50'],
            'deskripsi' => ['max:500']
        ], [
            'required' => 'Tidak boleh kosong',
            'alpha_dash' => 'Mengandung angka atau karakter spesial',
            'ascii' => 'Mengandung angka atau karakter spesial',
            'max' => 'Jumlah karakter melebihi batas',
        ]);
     
        $nama = $request->input('namaIkan');
        $luas = $request->input('luasLahan');
        $berat = $request->input('beratIdeal');
        $perairan = $request->input('jenisPerairan');
        $air = $request->input('jenisAir');
        $panen = $request->input('masaPanen');
        $desk = $request->input('deskripsi');

        $ikan = Ikan::where('id', $id)->first();

        $ikan->nama_ikan = $nama;
        $ikan->luas_lahan_id = $luas;
        $ikan->berat_ideal_id = $berat;
        $ikan->jenis_perairan_id = $perairan;
        $ikan->jenis_air_id = $air;
        $ikan->masa_panen_id = $panen;
        $ikan->deskripsi = $desk;

        $ikan->save();

        return redirect('ikan');
    }

    public function delete($id) {
        $ikan = Ikan::where('id', $id)->first();
        $ikan->delete();

        return redirect('ikan');
    }
}
