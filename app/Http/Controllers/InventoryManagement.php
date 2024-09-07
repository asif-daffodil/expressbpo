<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryManagement extends Controller
{
    public function index()
    {
        return view('pages.inventory-management');
    }
}
