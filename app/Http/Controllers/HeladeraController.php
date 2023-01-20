<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Helado;

class HeladeraController extends Controller
{
    public function index()
    {
        $helados = Helado::get();

        return view('helados.index', ['helados' => $helados]);
    }
}
