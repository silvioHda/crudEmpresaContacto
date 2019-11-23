@extends('layout.app')

@section('content')

<div class="row justify-content-center my-3">
    <h3>Editar contacto</h3>
</div>
<div class="justify-content-center">

<form action="{{url('/updateContacto/'.$contacto->id)}}" method="POST">
          {{csrf_field()}}
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nombre</label>
              <input type="text" class="form-control" name="nombre" value="{{$contacto->nombre}}" id="inputEmail4" placeholder="Nombre">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Apellidos</label>
              <input type="text" class="form-control" name="apellidos" value="{{$contacto->apellidos}}" id="inputPassword4" placeholder="Apellidos">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Teléfono</label>
            <input type="num" class="form-control" id="inputAddress" name="telefono" value="{{$contacto->telefono}}" placeholder="Teléfono" minlength="10" maxlength="10">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Email</label>
            <input type="email" class="form-control" id="inputAddress2" value="{{$contacto->email}}" name="email" placeholder="Correo electrónico">
          </div>
          <div class="form-row justify-content-center">   
            <div class="form-group col-md-4">
              <label for="inputState">Sexo</label>
              <select id="inputState" name="sexo" class="form-control">
                <option selected disabled>{{$contacto->sexo}}</option>
                <option value="M">M</option>
                <option value="F">F</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">Empresa</label>
              <select id="inputState" name="empresa" class="form-control">
                <option selected disabled><?php $emp = DB::table('empresa')->where('id',$contacto->idEmpresa)->first(); echo $emp->nombre;?></option>
                @foreach ($empresa as $empresas)
                <option value="{{$empresas->id}}">{{$empresas->nombre}}</option>
                @endforeach
              </select>
            </div>
          </div>

        </div>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </form>
</div>
@endsection