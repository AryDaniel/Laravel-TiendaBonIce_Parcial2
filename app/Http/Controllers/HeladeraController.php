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
        #Validar datos con laravel (reglas de validacion)
        $request->validate([
            #min:4 - minimos de caracteres pedidos
            'nombre' => ['min:4'],
            'sabor'  => ['min:4'],
            'precio'  => ['min_digits:1']
        ]);
        // En  https://laravel.com/docs/9.x/validation#available-validation-rules hay mas validaciones

        Helado::create($request->post()); // No se el significado de ->post()

        # 1re parametro, nombre donde se va a guardar el mensaje (status)
        # 2do parametro, El mensaje en si  (Post Created!)
        session()->flash('status', 'Helado creado!');
        #Se llaman mensajes flash porque solo se van a mostrar una vez

        return to_route('heladera.index');
    }

    public function destroy(Helado $helado)
    {
        $helado->delete();

        return to_route('heladera.index');
    }

    public function editar(Helado $helado)
    {
        
        return view('helados.edit', ['helado' => $helado]);
    }

    public function actualizar(Request $request, Helado $helado)
    {
        $request->validate([
            #required - que sea un campo obligatorio
            'nombre' => ['min:4'],
            'sabor'  => ['min:4'],       // Tiene que tener como minimo 4 caracteres
            'precio' => ['min_digits:1'] // Tiene que tener como minimo 1 digito
        ]);

        $helado->nombre     = $request->input('nombre');
        $helado->sabor      = $request->input('sabor');
        $helado->precio     = $request->input('precio');

        $helado->save();



        // Aqui use las dos formas que conozno de crear un mensaje flash
        // Usar el que mas de adecue a la situación ;)
        return to_route('heladera.index')->with('status', '¡Helado editado con exitó');
    }
}
