<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function dashboard(){
        return view('dosen.dashboard_dosen');
    }
    public function historiEfilling(){
        return view('dosen.histori_e-filling');
    }
    public function uploadFile(){
        return view('dosen.upload_file');
    }
    public function profile(){
        return view('dosen.profil_dosen');
    }
}
