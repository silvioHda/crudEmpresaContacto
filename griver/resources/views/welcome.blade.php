@extends('layout.app')

@section('content')

<div class="my-3">
<div class="row justify-content-center">
    <h3>Monitor de empresas</h3>
</div>


<div class="mt-3">

        <table class="table">
            <thead class="bg-primary">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Ver contactos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empresa as $empresas)
                <tr>

                    <th scope="row" id="id">{{$empresas->id}}</th>
                    <td id="name">{{$empresas->nombre}}</td>
                    <td id="des">{{$empresas->descripcion}}</td>
                    <td id="dir">{{$empresas->direccion}}</td>
                    <td id="tel">{{$empresas->telefono}}</td>
                    <td>
                        

                        <a href="{{url('monitor/'.$empresas->id)}}"><button type='button' class='btn btn-info' value="{{$empresas->id}}"  OnClick="mostrar(this);" data-toggle='modal' data-target='#myModal2'><img src='https://img.icons8.com/material-sharp/24/000000/list.png'></button></a>
                        
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection