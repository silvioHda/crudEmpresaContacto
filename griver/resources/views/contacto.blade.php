@extends('layout.app')

@section('content')

<div class="my-3">
  <div class="row justify-content-center">
    <h3>Catálogo de Contactos</h3>
  </div>

  <div>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Agregar nuevo</button>
  </div>

  <div class="mt-3">

    <table class="table">
      <thead class="bg-primary">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre del contacto</th>
          <th scope="col">empresa</th>
          <th scope="col">Telefono</th>
          <th scope="col"> Email</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($contacto as $contactos)
        <tr>
          <th scope="row">{{$contactos->id}}</th>
          <td>{{$contactos->nombre}} {{$contactos->apellidos}}</td>
          <td><?php $emp = DB::table('empresa')->where('id',$contactos->idEmpresa)->first(); echo $emp->nombre;?></td>
          <td>{{$contactos->telefono}}</td>
          <td>{{$contactos->email}}</td>
          <td>
           <button type="button" value="{{$contactos->id}}" class="btn btn-warning">
            <a href="{{url('editContacto/'.$contactos->id)}}"><img src="https://img.icons8.com/pastel-glyph/24/000000/edit.png"></a>
          </button>
          <button type="button" class="btn btn-danger" value="{{$contactos->id}}"  data-toggle="modal" data-target="#myModal2"><img src="https://img.icons8.com/android/24/000000/trash.png"></button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="{{url('/storeContacto')}}" method="POST">
          {{csrf_field()}}
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="inputEmail4" placeholder="Nombre">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Apellidos</label>
              <input type="text" class="form-control" name="apellidos" id="inputPassword4" placeholder="Apellidos">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Teléfono</label>
            <input type="num" class="form-control" id="inputAddress" name="telefono" placeholder="Teléfono" minlength="10" maxlength="10">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Email</label>
            <input type="email" class="form-control" id="inputAddress2" name="email" placeholder="Correo electrónico">
          </div>
          <div class="form-row justify-content-center">   
            <div class="form-group col-md-4">
              <label for="inputState">Sexo</label>
              <select id="inputState" name="sexo" class="form-control">
                <option selected disabled>Opción</option>
                <option value="M">M</option>
                <option value="F">F</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">Empresa</label>
              <select id="inputState" name="empresa" class="form-control">
                <option selected disabled>Empresa</option>
                @foreach ($empresa as $empresas)
                <option value="{{$empresas->id}}">{{$empresas->nombre}}</option>
                @endforeach
              </select>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Registrar</button>

        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Eliminar contacto</h4>
      </div>

      <div class="modal-body">
        <h5>¿Desea eliminar?</h5>
        <div class="modal-footer">
          <a href="{{url('deleteContacto/'.$contactos->id)}}"><button type="submit" class="btn btn-danger">Eliminar</button></a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection