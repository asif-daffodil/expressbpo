<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reporting extends Controller
{
    public function index()
    {
        return view('pages.reporting');
    }
}
