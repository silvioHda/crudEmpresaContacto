@extends('layout.app')

@section('content')

<div class=" justify-content-center">
	<form action="{{url('/updateEmpresa/'.$empresa->id)}}" method="POST">
					{{csrf_field()}}
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="inputEmail4">Nombre de la Empresa</label>
							<input type="text" name="nombre" value="{{$empresa->nombre}}" class="form-control" id="name" placeholder="Nombre de la empresa">
						</div>
					</div>
					<div class="form-group">
						<label for="inputAddress">Descripción</label>
						<textarea class="form-control"  id="exampleFormControlTextarea1" rows="3" name="descripcion">{{$empresa->descripcion}}</textarea>
					</div>
					<div class="form-group">
						<label for="inputAddress2">Dirección</label>
						<input type="text" class="form-control" value="{{$empresa->direccion}}" name="direccion" id="inputAddress2" placeholder="Dirección de la empresa">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCity">Telefono</label>
							<input type="num" name="telefono" class="form-control" value="{{$empresa->telefono}}" id="inputCity" placeholder="Teléfono">
						</div>

					</div>
					
						<button type="submit" class="btn btn-primary">Save changes</button>
					</form>
</div>

@endsection