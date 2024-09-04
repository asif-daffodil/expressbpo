<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeoServices extends Controller
{
    public function index()
    {
        return view('pages.seo-services');
    }
}
