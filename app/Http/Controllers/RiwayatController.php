<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Riwayat;
use App\Kerusakan;
use App\Gejala;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $hasil = Riwayat::with('kerusakan_ch')->Paginate(10);
        return view('layout.user.menu.riwayat.riwayat',compact('hasil')); 
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
    public function store(Riwayat $hasil)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conf_kondisi = config('global.kondisi');
        $hasil      = Riwayat::with('gejala_ch')->where('id_hasil', $id)->first();
        $arkerusakan = [];
        $argejala   = [];

        $arkerusakan = unserialize($hasil->kerusakan);
        $argejala = unserialize($hasil->gejala);

        $index = 0;
        $detail_kerusakan = [];
        $data_kerusakan = [];
        // $nama_kerusakan = [];

        // return $arkerusakan;
        foreach ($arkerusakan as $key => $value) {
            foreach ($value as $key1 => $value1) {
                if ( !isset($detail_kerusakan['data'])) {
                    $q_kerusakan = Kerusakan::where('kode_kerusakan', $key1)->first();
                    $detail_kerusakan['data'] = $key1;
                    $detail_kerusakan['value'] = $value1;
                    $detail_kerusakan['nama_kerusakan'] = $q_kerusakan ? $q_kerusakan->nama_kerusakan : '';
                    $detail_kerusakan['detail_kerusakan'] = $q_kerusakan ? $q_kerusakan->det_kerusakan : '';
                    $detail_kerusakan['saran_kerusakan'] = $q_kerusakan ? $q_kerusakan->srn_kerusakan : '';
                } else {
                    $q_kerusakan = Kerusakan::where('kode_kerusakan', $key1)->first();
                    $tmp_data['data'] = $key1;
                    $tmp_data['value'] = $value1;
                    $tmp_data['nama_kerusakan'] = $q_kerusakan ? $q_kerusakan->nama_kerusakan : '';
                    $tmp_data['detail_kerusakan'] = $q_kerusakan ? $q_kerusakan->det_kerusakan : '';
                    $tmp_data['saran_kerusakan'] = $q_kerusakan ? $q_kerusakan->srn_kerusakan : '';

                    array_push($data_kerusakan, $tmp_data);
                }
            }
        }


        $data_gejala = [];
        foreach ($argejala as $key => $value) {
            $id_kondisi = '';
            foreach ($value as $i => $val) {
                $id_kondisi = $val;
                break;
            }

            $kode_gejala = $key;
            $tmp_gejala = Gejala::where('kode_gejala', $kode_gejala)->first();
            
            if ($tmp_gejala) {
                $tmp_kondisi = @$conf_kondisi[$id_kondisi];
                $kondisi_txt = ($tmp_kondisi) ? $tmp_kondisi['nama'] : '';
                $tmp_gejala->kondisi = $kondisi_txt;
                array_push($data_gejala, $tmp_gejala);
            }
        }

        // return $data_kerusakan;

        return view('layout.user.menu.riwayat.show', compact('data_gejala', 'detail_kerusakan', 'data_kerusakan'));
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
