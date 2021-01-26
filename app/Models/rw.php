<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rw extends Model
{
    public function desa(){
        return $this->belongsTo('app\model\desa\id_desa');
    }
    use HasFactory;
}
