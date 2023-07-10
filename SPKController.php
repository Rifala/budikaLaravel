<?php

namespace App\Http\Controllers;

use App\Models\Pembudidaya;
use Illuminate\Http\Request;
use App\Models\Ikan;
use App\Models\Gap;
use App\Models\LuasLahan;
use App\Models\BeratIdeal;
use App\Models\JenisPerairan;
use App\Models\JenisAir;
use App\Models\Kriteria;
use App\Models\MasaPanen;
use Illuminate\Routing\Controller;

class SPKController extends Controller
{
    public function krite(){
        return view('dataKriteria', [
            'krt' => Kriteria::all(),
            'll' => LuasLahan::all(),
            'bi' => BeratIdeal::all(),
            'jp' => JenisPerairan::all(),
            'ja' => JenisAir::all(),
            'mp' => MasaPanen::all()
        ]);
    }

    public function storePbd(Request $request){
        $validated = $request->validate([
            'nam' => ['required'],
            'no_hp' => ['required','numeric'],
            'email' => ['required','email:rfc,dns']
        ], [
            'required' => 'Tidak boleh kosong',
            'max' => 'Jumlah karakter melebihi batas',
            'numeric' => 'Masukkan angka!'
        ]);

        // $validated = $request->validate([
        //     'nam' => ['required','alpha_dash'],
        //     'no_hp' => ['required','numeric','max:13','min:12'],
        //     'email' => ['required','email:rfc,dns']
        // ], [
        //     'required' => 'Tidak boleh kosong',
        //     'alpha_dash' => 'Mengandung angka atau karakter spesial',
        //     'max' => 'Jumlah karakter melebihi batas',
        //     'numeric' => 'Masukkan angka!'
        // ]);

        $c1 = $request->input('c1');
        $c2 = $request->input('c2');
        $c3 = $request->input('c3');
        $c4 = $request->input('c4');
        $c5 = $request->input('c5');

        $pbd = new Pembudidaya;
        $pbd->nama = $request->input('nam');
        $pbd->jk = $request->input('jk');
        $pbd->no_hp = $request->input('no_hp');
        $pbd->email = $request->input('email');
        $pbd->luas_lahan_id = $c1;
        $pbd->berat_ideal_id = $c2;
        $pbd->jenis_perairan_id = $c3;
        $pbd->jenis_air_id = $c4;
        $pbd->masa_panen_id = $c5;
        $pbd->save();

        $selisih = $this->pm_selisih($c1,$c2,$c3,$c4,$c5);
        $bobot = $this->pm_bobot($selisih);
        $mean = $this->pm_mean($bobot);
        $hasil = $this->pm_result($mean);

            // return view('tes', [
            //     'listHasil' =>collect($bobot)
            // ]);

        return view('User_View/spkHasil',[
            'hasil' => collect($hasil)->sortByDesc('total')->values()->all()
        ]);
    }


    public function pm_selisih($s1,$s2,$s3,$s4,$s5){
        $ikan = Ikan::all();

        $listIkan = [];

        foreach($ikan as $ikn){
            $c1 = $ikn->luas_lahan_id-$s1;
            $c2 = $ikn->berat_ideal_id-$s2;
            $c3 = $ikn->jenis_perairan_id-$s3;
            $c4 = $ikn->jenis_air_id-$s4;
            $c5 = $ikn->masa_panen_id-$s5;

            $listIkan[] = ['id'=>$ikn->id,
                            'nama'=>$ikn->nama_ikan,
                            'c1'=>$c1,
                            'c2'=>$c2,
                            'c3'=>$c3,
                            'c4'=>$c4,
                            'c5'=>$c5,
                            'deskripsi'=>$ikn->deskripsi];
        }

        return $listIkan;
        // $this->pm_bobot($listIkan);

        // return view('tes', [
        //     'listHasil' =>collect($listIkan)
        // ]);

    }

    public function pm_bobot($listSelisih){
        $listBobot = [];
        foreach($listSelisih as $sls){
            $c1 = Gap::where('selisih',$sls['c1'])->value('bobot');
            $c2 = Gap::where('selisih',$sls['c2'])->value('bobot');
            $c3 = Gap::where('selisih',$sls['c3'])->value('bobot');
            $c4 = Gap::where('selisih',$sls['c4'])->value('bobot');
            $c5 = Gap::where('selisih',$sls['c5'])->value('bobot');

            $listBobot[] = ['id'=>$sls['id'],
                            'nama'=>$sls['nama'],
                            'c1'=>$c1,
                            'c2'=>$c2,
                            'c3'=>$c3,
                            'c4'=>$c4,
                            'c5'=>$c5,
                            'deskripsi'=>$sls['deskripsi']];
        }

        // $this->pm_mean($listBobot);
        return $listBobot;
    }

    public function pm_mean($listBobot){
        $listMean = [];
        foreach($listBobot as $bbt){
            $c1 = $bbt['c1'];
            $c2 = $bbt['c2'];
            $c3 = $bbt['c3'];
            $c4 = $bbt['c4'];
            $c5 = $bbt['c5'];

            $cr = [$c1,$c2,$c5];
            $sc = [$c3,$c4];

            $core = $this->pm_mean_assist($cr);
            $sec = $this->pm_mean_assist($sc);

            $listMean[] = ['id'=>$bbt['id'],
                            'nama'=>$bbt['nama'],
                            'core'=>$core,
                            'second'=>$sec,
                            'deskripsi'=>$bbt['deskripsi']];

        }

        return $listMean;
    }

    public function pm_mean_assist($list){
        $sum = 0;
        foreach($list as $i){
            $sum += $i;
        }

        return $sum/count($list);
    }

    public function pm_result($listMean){
        $listHasil = [];
        foreach($listMean as $i => $lmn){
            $core = $lmn['core'];
            $second = $lmn['second'];

            $rslt = (0.6*$core)+(0.4*$second);
            $prsn = ($rslt/5)*100;
            

            $listHasil[] = ['id'=>$lmn['id'],
                            'nama'=>$lmn['nama'],
                            'total'=>$rslt,
                            'persentase'=> $prsn .="%",
                            'deskripsi'=>$lmn['deskripsi']];
            
            asort($listHasil);

        }

        return $listHasil;
    }
}
