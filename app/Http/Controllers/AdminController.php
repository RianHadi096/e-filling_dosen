<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard_admin');
    }
    public function historiEfillingDosen()
    {
        return view('admin.histori_e-filling_dosen');
    }
}
