@extends('components/layouts/plantillaAzul')
@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron bg-dark text-light">
                    <h1 class="display-4">Encuentra tus BonIce favoritos</h1>
                    <div>
                        <div class="text-center">
                            <img src="{{asset('imagenes/vendedor.jpg')}}" style="float: right"  width="250px" class="img-thumbnail">
                        </div>
                        <p class="lead">
                        El rincon donde podras comprar BonIce:
                        <ul>
                            <li>Ver catalogo</li>
                            <li>Registrar nuevos productos</li>
                            <li>Editar productos</li>
                            <li>Eliminar productos</li>
                         </ul>
                        </p>
                        </div>
                    <hr class="my-4">
                    <p>PROYECTO PARCIAL 2</p>
                  </div>
            </div>
        </div>
    </div>
@endsection 