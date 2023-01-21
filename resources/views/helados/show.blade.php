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
                        {{--<a href="{{ route('heladera.delete') }}" type="button" class="btn btn-danger">Eliminar</a> --}}
                        <form action="{{ route('heladera.delete', $helado) }}" method="POST"> {{-- Muy importante que sea metodo POST --}}
                            @csrf @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection 