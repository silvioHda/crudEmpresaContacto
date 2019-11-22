@extends('layout.app')

@section('content')

<div class="my-3">
<div class="row justify-content-center">
    <h3>Catálogo de Contactos</h3>
</div>

<div>
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Agregar nuevo</button>
</div>

<div class="mt-3">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Empresa</th>
      <th scope="col">Dirección</th>
      <th scope="col">Telefono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
      	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Danger</button>
		<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Warning</button>
	  </td>
    </tr>
  </tbody>
</table>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
          <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellidos</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Apellidos">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Teléfono</label>
    <input type="num" class="form-control" id="inputAddress" placeholder="Teléfono" minlength="10" maxlength="10">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Email</label>
    <input type="email" class="form-control" id="inputAddress2" placeholder="Correo electrónico">
  </div>
  <div class="form-row justify-content-center">   
    <div class="form-group col-md-4">
      <label for="inputState">Sexo</label>
      <select id="inputState" class="form-control">
        <option selected disabled>Opción</option>
        <option>M</option>
        <option>F</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Empresa</label>
      <select id="inputState" class="form-control">
        <option selected disabled>Empresa</option>
        <option>M</option>
      </select>
    </div>
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

@endsection