<?php

namespace App\Http\Controllers\Api;

use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kasus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function provinsi(Request $request )
    {
    $kasus = new Kasus;
    $kasus->positif = $request->positif;
    $kasus->sembuh = $request->sembuh;
    $kasus->save();

    return response()->json([
        "message" => "student record created"
    ], 201);

    }

    public function provinsixkota($id)
    {
        if (Kasus::where('id', $id)->exists()) {
            $kasus = Kasus::where('id', $id)->get()
            ->join('countries', 'countries.country_id', '=', 'leagues.country_id');
            return response($kasus, 200);
          } else {
            return response()->json([
              "message" => "Student not found"
            ], 404);
          }
      
        
    }
}