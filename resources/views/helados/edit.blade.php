@extends('components/layouts/plantillaAzul')
@section('content')
<div class="container bg-warning ">
    <div class="row">
        <div class="col-12">
            <h1>Editar Helado</h1><hr>
            <form method="post" action="{{ route('heladera.update') }}">
                @csrf @method('PATCH')

                <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" placeholder="Teclea el nombre del producto" value="{{$helado->nombre}}">
                </div>

                <br>
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Sabor</label>
                        <input name="sabor" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Teclea un sabor" value="{{$helado->sabor}}">
                    </div>
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input name="precio" type="number" class="form-control" id="inlineFormInputGroup" placeholder="Precio" value="{{$helado->precio}}">
                        </div>
                    </div>
                </div>

                <br>
                <div>
                    <a href=" {{ route('heladera.index') }}" type="button" class="btn btn-secondary">Regresar    </a>
                    <input type="submit" class="btn btn-info" value="Editar">
                </div>
                <br>
            </form>
        </div>
    </div>
</div>
@endsection 