<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()  {
        return 'Nama: Faiq Ramzy Nabighah <br> NIM: 2241760024 <br> SIB 3A';
    }
}
