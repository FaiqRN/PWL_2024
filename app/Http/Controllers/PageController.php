<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat datang mas bro';
    }

    public function about(){
        return 'Nama: Faiq Ramzy Nabighah <br> NIM: 2241760024';
    }

    public function artikel($artikelId, $userId) {
        return 'Artikel ke- ' . $artikelId . " ID ke- $userId";
    }

    
}
