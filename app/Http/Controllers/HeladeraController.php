<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Helado;

class HeladeraController extends Controller
{
    public function index()
    {
        $helados = Helado::paginate(3);

        return view('helados.index',  compact('helados'));
    }
    
    public function show(Helado $helado)
    {

        return view('helados.show', ['helado' => $helado]);
        
    }

    public function create()
    {
        return view('helados.create');
    }

    public function store()
    {
        return 'In process';
    }
}
