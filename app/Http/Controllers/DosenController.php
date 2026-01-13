<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function eFilling()
    {
        return view('dosen.histori_e-filling');
    }
}
