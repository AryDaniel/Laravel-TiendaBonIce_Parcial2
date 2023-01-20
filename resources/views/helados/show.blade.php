@extends('components/layouts/plantillaAzul')
@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron bg-dark text-light">

                    <h1 class="display-4">{{ $helado->nombre }}</h1>
        
                    <hr class="my-4">
                    <h3>Sabor: {{ $helado->sabor }}</h3>
                    
                    <hr class="my-4">
                    <h3>Precio: {{ $helado->precio }}</h3>
                    
                    <hr class="my-4">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href=" {{ route('heladera.index') }}" type="button" class="btn btn-secondary">Regresar    </a>
                        <a href="#" type="button" class="btn btn-info">Editar</a>
                        <a href="#" type="button" class="btn btn-danger">Eliminar</a>                            
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection 