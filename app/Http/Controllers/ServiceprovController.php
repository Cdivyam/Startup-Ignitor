<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceprovController extends Controller
{
    public function index()
    {
        return view('serviceprovview.index');
    }
}
