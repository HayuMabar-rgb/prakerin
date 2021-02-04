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
public function allProvinsi(){
  $allDay = DB::table('provinsis')
    ->select('provinsis.nama_provinsi','provinsis.kode_provinsi',
            DB::raw('sum(kasuses.positif)as positif'),
            DB::raw('sum(kasuses.sembuh)as sembuh'),
            DB::raw('sum(kasuses.meninggal)as meninggal'))
      ->join('kotas','provinsis.id','=','kotas.id_provinsi')
      ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
      ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
      ->join('rws','kelurahans.id','=','rws.id_kelurahan')
      ->join('kasuses','rws.id','=','kasuses.id_rw')
      ->groupBy('provinsis.id')
      ->get();
  $today = DB::table('provinsis')
  ->select('provinsis.nama_provinsi','provinsis.kode_provinsi',
  DB::raw('sum(kasuses.positif)as positif'),
  DB::raw('sum(kasuses.sembuh)as sembuh'),
  DB::raw('sum(kasuses.meninggal)as meninggal'))
  ->join('kotas','provinsis.id','=','kotas.id_provinsi')
      ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
      ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
      ->join('rws','kelurahans.id','=','rws.id_kelurahan')
      ->join('kasuses','rws.id','=','kasuses.id_rw')
      ->whereDate('kasuses.tanggal',Carbon::today())
      ->groupBy('provinsis.id')
      ->get();
      $data = [
        'succes' => true,
        'data' => [
          ['hari ini'=> $today,
          'total'=> $allDay],
        ],
        'message'=>'berhasil',
      ];
      return response()->json($data,200);
    }
}