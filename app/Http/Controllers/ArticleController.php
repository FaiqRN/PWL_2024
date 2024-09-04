<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke($artikelId, $userId){
        return 'Artikel ke- ' . $artikelId . " ID ke- $userId";
    }
}
