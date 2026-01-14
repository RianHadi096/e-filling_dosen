<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewerController extends Controller
{
    public function dashboard(){
        return view('reviewer.dashboard_reviewer');
    }
    public function historiReview(){
        return view('reviewer.histori_review');
    }
    public function profile(){
        return view('reviewer.profil_reviewer');
    }
    public function reviewDokumen(){
        return view('reviewer.review_dokumen');
    }
}
