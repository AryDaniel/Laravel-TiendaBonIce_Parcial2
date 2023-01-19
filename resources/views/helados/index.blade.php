@extends('components/layouts/plantillaAzul')
@section('content')
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


                        <tr class="bg-light">
                            <td class="bg-danger text-white"></td>
                            <td></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="#" type="button" class="btn btn-info">Editar</a>
                                    <a href="#" type="button" class="btn btn-danger">Eliminar</a>                            
                                </div>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection 