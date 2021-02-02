<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasus extends Model
{
    
    protected $table = "kasuses";
    protected $fillable = ['id', 'positif', 'negatif', 'sembuh', 'meninggal', 'tanggal', 'id_rw'];
    public $timestamps = true;

    public function rw() {
        return $this->belongsTo('App\Models\rw','id_rw');
    }
    use HasFactory;
}
