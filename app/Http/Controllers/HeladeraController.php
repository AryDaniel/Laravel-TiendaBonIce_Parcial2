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
    /*
        Request $request
        nos permiten acceder a los datos title y body
        en formato json 
    */
    public function store(Request $request)
    {
        /*
        $helado = new Helado;
        $helado->nombre     = $request->input('nombre');
        $helado->sabor      = $request->input('sabor');
        $helado->precio     = $request->input('precio');
        $helado->save();
        */

        //Al pareces esto hace lo mismo que arriba
        Helado::create($request->post()); // No se el significado de ->post()

        return to_route('heladera.index');
    }

    public function destroy(Helado $helado)
    {
        $helado->delete();

        return to_route('heladera.index');
    }

    public function editar($id)
    {
        $helado = Helado::find($id);
        
        return view('helados.edit', compact('helado'));
    }

    public function actualizar()
    {
        return 'in progress';
    }
}
