<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccelaratorController extends Controller
{
    public function index()
    {
        return view('accelaratorview.index');
    }
}
