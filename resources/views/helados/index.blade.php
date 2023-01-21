@extends('components/layouts/plantillaAzul')
@section('content')
<div class="text-center">
    <a href="{{ route('heladera.create') }}" type="button" class="btn btn-danger">Crear nuevo registro</a>
</div>
<br>
<div class="container" >
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th >ID</th>
                            <th>Nombre Producto Helado</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($helados as $helado)
                            <tr class="bg-light">
                                <td class="bg-danger text-white">{{ $helado->id }}</td>
                                    <td>
                                        <a href="{{ route('heladera.show', $helado->id) }}">
                                            {{ $helado->nombre }}
                                        </a>
                                    </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="#" type="button" class="btn btn-info">Editar</a>
                                        <!-- <a href="{{ route('heladera.delete', $helado->id) }}" type="button" class="btn btn-danger">Eliminar</a>  -->                          
                                        <form action="{{ route('heladera.delete', $helado) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                        {{-- Si usamos un link para delete estariamos usando el verbo POST
                                            por eso tenemos que hacer un formulario y decirle que queremos el method('DELETE') 
                                        --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$helados->links()}}
            </div>
        </div>
    </div>
@endsection 