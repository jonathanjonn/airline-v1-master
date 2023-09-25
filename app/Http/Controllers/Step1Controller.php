<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penerbangan;
use Illuminate\Support\Facades\Session;

class Step1Controller extends Controller
{
    public function search(Request $request){
        $request->session()->flush();
        $dari = $request->input('dari');
        $ke = $request->input('ke');
        $tanggal = $request->input('tanggal');
        $kelas = $request->input('kelas');
        $penumpang = $request->input('penumpang');
        // $results = DB::table('penerbangan AS p')
        //             ->join('bandara AS bb', 'p.bandara_asal_id', '=', 'bb.id')
        //             ->join('bandara AS bd', 'p.bandara_tujuan_id', '=', 'bd.id')
        //             ->join('kelas_penerbangan AS kp', 'p.id', '=', 'kp.penerbangan_id')
        //             ->select('p.id', 'p.waktu_berangkat', 'p.waktu_sampai', 'bb.kota AS kota_asal', 'bd.kota AS kota_tujuan','p.maskapai', 'p.tipe_pesawat', 'kp.tipe_kelas', 'kp.harga', 'kp.jumlah_kursi')
        //             ->where('bb.kota', '=', $dari)
        //             ->where('bd.kota', '=', $ke)
        //             ->where('p.waktu_berangkat', 'like', $tanggal . '%')
        //             ->where('kp.tipe_kelas', '=', $kelas)
        //             ->where('kp.jumlah_kursi', '>=', $penumpang)
        //             ->get();
        $results = penerbangan::with(['bandara_asal', 'bandara_tujuan', 'kelas_penerbangan'])
                    ->whereHas('bandara_asal', function($query) use ($dari){
                        $query->where('kota', '=', $dari);
                    })
                    ->whereHas('bandara_tujuan', function($query) use ($ke){
                        $query->where('kota', '=', $ke);
                    })
                    ->where('waktu_berangkat', 'like', $tanggal . '%')
                    ->whereHas('kelas_penerbangan', function($query) use ($kelas){
                        $query->where('tipe_kelas', '=', $kelas);
                    })
                    ->whereHas('kelas_penerbangan', function($query) use ($penumpang){
                        $query->where('jumlah_kursi', '>=', $penumpang);
                    })
                    ->get();
        if($results->isEmpty()){
            $request->session()->put('error', 'Penerbangan tidak ditemukan');
            return view('home');
        }
        return view('step1', ['results' => $results, 'penumpang' => $penumpang, 'kelas' => $kelas]);
    }
}
