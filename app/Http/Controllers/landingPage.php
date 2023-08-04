<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;
use App\Models\lk1;

class landingPage extends Controller
{
    public function index()
    {
        return view('landingpage');
    }
    public function berita()
    {
        $dataBerita = berita::where('tipe_berita','=','1')
            ->where('tayang','=','1')
            ->orderBy('tgl_berita','desc')
            ->paginate(8);
        return view('berita',compact(['dataBerita']));
    }
    public function detailBerita($id)
    {
        $dataBerita = berita::where('linked_hash','=',$id)
            ->first();
        return view('detailberita',compact(['dataBerita']));
    }
    public function panduanHmi()
    {
        $dataBerita = berita::where('tipe_berita','=','2')
            ->where('tayang','=','1')
            ->orderBy('tgl_berita','desc')
            ->paginate(8);
        return view('berita',compact(['dataBerita']));
    }
    public function latihanKader(){
        $setPage = 1;
        return view('latihanKader',compact(['setPage']));
    }
    function submitLatihanKader(Request $request) {
        $peserta = new lk1;
        $peserta->periodik_lk = 2023;
        $peserta->nama_peserta = $request->nama_peserta;
        $peserta->alamat_peserta = $request->alamat_peserta;
        $peserta->telp_peserta = $request->telp_peserta;
        $peserta->asal_univ = $request->asal_univ;
        $peserta->asal_fakultas = $request->asal_fakultas;
        $peserta->asal_prodi = $request->asal_prodi;
        $peserta->harapan = $request->harapan;
        $peserta->save();
        $setPage = 2;
        return view('latihanKader',compact(['setPage']));
    }
}
