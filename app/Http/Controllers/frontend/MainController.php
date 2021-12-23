<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('frontend.home_layout.index');
    }
    // australia
    public function aus()
    {
        return view('frontend.aus_layout.index');
    }
    public function  newzeeland()
    {
        return view('frontend.nz_layout.index');
    }
    public function UK()
    {
        return view('frontend.uk_layout.index');
    }
    public function aus_candidate_register()
    {
        return view('frontend.aus_layout.candidate_registration.index');
    }
    public function nz_candidate_register()
    {
        return view('frontend.nz_layout.candidate_registration.index');
    }
}
