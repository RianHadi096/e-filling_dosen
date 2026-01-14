<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function dosenLogin(){
        return view('dosen.login_dosen');
    }
    public function adminLogin(){
        return view('admin.login_admin');
    }
    public function reviewerLogin(){
        return view('reviewer.login_reviewer');
    }

    public function authenticate(Request $request){
        // Authentication logic here
    }

    public function logout(Request $request){
        // Logout logic here
    }
}