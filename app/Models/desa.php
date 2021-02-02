<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class desa extends Model
{
    public function kecamatan(){
        $this->belongsTo('app\models\kecamatan','id_kota');
    }
    
    public function rw(){
        $this->hasMany('app\models\rw','id_desa');

    }
    
    use HasFactory;
}
