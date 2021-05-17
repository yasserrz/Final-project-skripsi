<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Diagnosa;
use App\Basis;
use App\Gejala;
use App\Kerusakan;
use App\Hasil;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kondisi=config('global.kondisi');
        $gejala = Gejala::all();
        return view('layout.user.menu.diagnosa.diagnosa',compact('gejala','kondisi')); 


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();

        $argejala = [];

        foreach($request->kondisi as $i => $kondisi) {
            $arkondisi = explode("_", $request->kondisi[$i]);
            if (strlen($kondisi) > 1) {
                array_push($argejala, [$arkondisi[0] => $arkondisi[1]] );
            }
        }

        $list_kondisi = config('global.kondisi');
        $arkondisitext = [];
        foreach($list_kondisi as $i => $_kondisi) {
            $arkondisitext[$i] = $_kondisi['nama'];
        }

        $tmp_kerusakans = Kerusakan::orderBy('kode_kerusakan', 'asc')->get();

        $kerusakans = $tmp_kerusakans;
        $ar_kerusakan = [];

        foreach($kerusakans as $i => $kerusakan) {
            $cftotal_tmp = 0;   
            $cf = 0;
            $cflama = 0;

            $gejalas = Basis::where('kode_kerusakan', $kerusakan->kode_kerusakan)->get();
            
            
            foreach($gejalas as $j => $gejala) {
                $tmp_kondisi = explode("_", $request->kondisi[0]);
                $tmp_gejala = $tmp_kondisi[0];

                foreach($request->kondisi as $k => $kondisi) {
                    $tmp_kondisi = explode("_", $request->kondisi[$k]);
                    $tmp_gejala = $tmp_kondisi[0];

                    if ($gejala->kode_gejala == $tmp_gejala) {
                        // return $list_kondisi[$tmp_kondisi[1]];
                        // return (($gejala->mb - $gejala->md);
                        $cf = ($gejala->mb - $gejala->md) * @$list_kondisi[$tmp_kondisi[1]]['bobot'];

                        if ( ($cf >= 0) && ($cf * $cflama >= 0) ) {
                            $cflama = $cflama + ($cf * (1- $cflama));
                        }

                        if ($cf * $cflama < 0) {
                            $cflama = ($cflama + $cf) / (1 - Math.min(Math.abs($cflama), Math.abs($cf)));
                        }

                        if ( ($cf < 0) && ($cf * $cflama >= 0)) {
                            $cflama = $cflama + ($cf * (1 + $cflama));
                        }

                    }
                }       
            }

            if ($cflama > 0) {
                array_push($ar_kerusakan, [
                    $kerusakan->kode_kerusakan => number_format($cflama, 4)
                    ]
                );
            }   
        }

        arsort($ar_kerusakan);

        $inpgejala = serialize($argejala);
        $inpkerusakan = serialize($ar_kerusakan);

        $index = 0;
        $data_kerusakan = [];
        $val_kerusakan = [];

        foreach ($ar_kerusakan as $key => $value) {
            $index++;
            foreach ($value as $key1 => $value1) {
                // return $value1
                $data_kerusakan[$index] = $key1;
                $val_kerusakan[$index] = $value1;
            }
        }

        // return $data_kerusakan;

        // $data_kerusakan = json_encode($data_kerusakan);
        // $val_kerusakan = json_encode($val_kerusakan);

        // return $data_kerusakan[1];
        // return $val_kerusakan[1];
        $hasil = new Hasil();
        
        $hasil->gejala = $inpgejala;
        $hasil->penyakit = $inpkerusakan;
        $hasil->hasil_id = @$data_kerusakan[1];
        $hasil->hasil_nilai = @$val_kerusakan[1];
        $hasil->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gejala $gejala)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gejala $gejala)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gejala $gejala)
    {
        
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gejala $gejala)

    {
    
    }
}
