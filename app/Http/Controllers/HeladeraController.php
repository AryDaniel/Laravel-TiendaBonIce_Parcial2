<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeladeraController extends Controller
{
    public function index()
    {
        return view('helados.index');
    }
}
