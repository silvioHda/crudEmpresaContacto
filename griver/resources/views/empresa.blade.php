@extends('layout.app')

@section('content')

<div class="my-3">
	<div class="row justify-content-center">
		<h3>Catálogo de Empresas</h3>
	</div>

	<div>
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal1">Agregar nuevo</button>
	</div>

	<div class="mt-3">

		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Empresa</th>
					<th scope="col">Descripción</th>
					<th scope="col">Dirección</th>
					<th scope="col">Telefono</th>
					<th scope="col">Acciones</th>
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

						<button type="button" value="{{$empresas->id}}" class="btn btn-warning" data-toggle="modal" data-target="#myModal2" >
							<a href="{{url('editEmpresa/'.$empresas->id)}}"><img src="https://img.icons8.com/pastel-glyph/24/000000/edit.png"></a>
						</button>
						<button type="button" class="btn btn-danger" value="{{$empresas->id}}" data-toggle="modal" data-target="#myModal2"><img src="https://img.icons8.com/android/24/000000/trash.png"></button>
					</td>

				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>


<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">

				<h4 class="modal-title" id="myModalLabel">Modal 1</h4>
			</div>

			<div class="modal-body">
				<form action="{{url('/storeEmpresa')}}" method="POST">
					{{csrf_field()}}
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="inputEmail4">Nombre de la Empresa</label>
							<input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre de la empresa">
						</div>
					</div>
					<div class="form-group">
						<label for="inputAddress">Descripción</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
					</div>
					<div class="form-group">
						<label for="inputAddress2">Dirección</label>
						<input type="text" class="form-control" name="direccion" id="inputAddress2" placeholder="Dirección de la empresa">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCity">Telefono</label>
							<input type="num" name="telefono" class="form-control" id="inputCity" placeholder="Teléfono">
						</div>

					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Save changes</button>
					</form>

					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">

				<h4 class="modal-title" id="myModalLabel">Modal 1</h4>
			</div>

			<div class="modal-body">
				<h5>¿Desea eliminar?</h5>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary"><a href="{{url('deleteEmpresa/'.$empresas->id)}}">Eliminar</a></button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

</div>
	
	





@endsection