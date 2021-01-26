<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    public function kota(){
        $this->belongsTo('app\models\kecamatan\id_kota');
    }
    public function desa(){
        $this->hasMany('app\models\kota\id_kecamatan');
    }
    use HasFactory;
}
