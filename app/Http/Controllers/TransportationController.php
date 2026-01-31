<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransportationController extends Controller
{
    public function index()
    {
        return view('transportation');
    }
}
