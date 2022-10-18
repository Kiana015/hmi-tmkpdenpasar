<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingPage extends Controller
{
    public function index()
    {
        return view('landingpage');
    }
    public function berita()
    {
        return view('berita');
    }
    public function detailBerita($id)
    {
        return view('detailberita');
    }
    public function panduanHmi()
    {
        return view('berita');
    }    
}
