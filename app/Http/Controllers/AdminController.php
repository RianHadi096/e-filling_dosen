<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard_admin');
    }
    public function historiEfillingDosen(){
        return view('admin.histori_e-filling_dosen');
    }
    public function verifikasiFile(){
        return view('admin.verifikasi');
    }
    public function userManagement(){
        return view('admin.user_management');
    }
    public function profile(){
        return view('admin.profil_admin');
    }
}
