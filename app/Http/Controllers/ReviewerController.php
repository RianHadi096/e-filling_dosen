<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewerController extends Controller
{
    public function dashboard(){
        return view('reviewer.dashboard_reviewer');
    }
}
