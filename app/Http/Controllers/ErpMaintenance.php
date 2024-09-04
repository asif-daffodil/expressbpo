<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErpMaintenance extends Controller
{
    public function index()
    {
        return view('pages.erp-maintenance');
    }
}
