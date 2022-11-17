<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;

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
        return view('berita');
    }    
}
