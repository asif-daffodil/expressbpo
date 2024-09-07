<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleTaxCompliance extends Controller
{
    public function index()
    {
        return view('pages.sale-tax-compliance');
    }
}
