@extends('layout.app')

@section('content')

<div class="justify-content-center my-3">

 <h4 class="modal-title" id="myModalLabel">Empresa: {{$empresa->nombre}}</h4>

       			<hr>
                <h6>Descripción: </h6>
                <p>{{$empresa->descripcion}}</p>
                <h6>Dirección: </h6>
                <p>{{$empresa->direccion}}</p>
                <h6>Teléfono: </h6>
                <p>{{$empresa->telefono}}</p>
                <hr>
                <h6>Contactos</h6>
                <div>
                    <ul>
                    <?php 
                    $contac = DB::table('contacto')->where('idEmpresa',$empresa->id)->get();
                    foreach ($contac as $contactos) {
                        echo "<li>". $contactos->nombre." ".$contactos->apellidos."<ul><li>".$contactos->telefono."</li><li>".$contactos->email."</li></ul></li>";
                    }
                     ?> 
                    </ul>
                </div>

	<a href="{{url('/')}}"><button type="button" class="btn btn-primary">Regresar</button></a>
</div>
</div>
@endsection