<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    public function kota(){
        $this->belongsTo('App\Models\Kota\id_kota');
    }
    public function desa(){
        $this->hasMany('App\Models\desa\id_kecamatan');
    }
    use HasFactory;
}
