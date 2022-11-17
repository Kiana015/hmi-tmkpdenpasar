<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;

class beritaController extends Controller
{
    public function index()
    {
        $allberita = berita::all();
        return view('manageberita',compact(['allberita']));
    }
    public function tambahBerita()
    {
        return view('tambahberita');
    }
    public function postTambahBerita(Request $request)
    {
        $image = $request->file('thumb_pic_berita');
        $imageName = date('YmdHis',strtotime(now())).'.'.$image->extension();
        $image->move(public_path('Assets/pic'),$imageName);
        $tambahBerita = new berita();
        $hash_link = str_replace('/','_',bcrypt($request->header_berita));
        $tambahBerita->linked_hash = $hash_link;
        $tambahBerita->judul_berita = $request->header_berita;
        $tambahBerita->tgl_berita = date('YmdHis',strtotime(now()));
        $tambahBerita->penulis = $request->penulis_berita;
        $tambahBerita->tempat = $request->tempat_berita;
        $tambahBerita->thumb_gambar = $imageName;
        $tambahBerita->isi = $request->isi_berita;
        $tambahBerita->tayang = $request->tayang;
        $tambahBerita->tipe_berita = $request->tipe_berita;
        $tambahBerita->save();
        return redirect('/tambahBerita')->with('success','Sukses Tambah Berita');
    }
    public function editBerita($id)
    {
        $databerita = berita::find($id);
        return view('updateberita',compact(['databerita','id']));
    }
    public function postEditBerita($id, Request $request)
    {
        $tambahBerita = berita::find($id);
        $image = $request->file('thumb_pic_berita');
        if(!empty($image))
        {
        $imageName = date('YmdHis',strtotime(now())).'.'.$image->extension();
        $image->move(public_path('Assets/pic'),$imageName);
        $tambahBerita->thumb_gambar = $imageName;
        }
        $tambahBerita->judul_berita = $request->header_berita;
        $tambahBerita->penulis = $request->penulis_berita;
        $tambahBerita->tempat = $request->tempat_berita;
        $tambahBerita->isi = $request->isi_berita;
        $tambahBerita->tayang = $request->tayang;
        $tambahBerita->tipe_berita = $request->tipe_berita;
        $tambahBerita->save();
        return redirect('/editBerita/'.$id)->with('success','Sukses Ubah Berita');
    }
    public function hapusBerita($id)
    {
        $hapusBerita = berita::find($id);
        $hapusBerita->delete();
        return redirect('/beritaTmkp')->with('danger','Sukses Hapus Berita');
    }
}
