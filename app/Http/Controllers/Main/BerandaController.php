<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // Mengarahkan ke file resources/views/main/beranda.blade.php
        return view('main.beranda');
    }
}