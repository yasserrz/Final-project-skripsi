<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
   protected $table = 'hasil';
   protected $primaryKey ='id_hasil';
   protected $fillable = ['penyakit','gejala','kode_kerusakan','hasil_id','hasil_nilai'  ];

   
}