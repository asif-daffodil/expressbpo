<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyOverview extends Controller
{
    // index
    public function index()
    {
        return view('pages.company-overview');
    }
}
