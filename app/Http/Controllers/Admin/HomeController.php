<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index()
    {
        return view('home');
    }
}
