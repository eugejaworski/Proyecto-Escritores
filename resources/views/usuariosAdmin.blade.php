
@extends('layouts.mainadmin')

@section('content')
<div class="listados">
  <h2 class="listatitulo">ESCRITORES</h2>
  <div class="hola">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Mostrar</th>
          <th scope="col">Modificar</th>
          <th scope="col">Borrar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($listadoUsuarios as $key => $value)
        <tr>
          <th scope="row"> {{$value->id}}</th>
          <td>{{$value->name}}</td>
          <td>{{$value->surname}}</td>
          <td>
            <a href="mostrarUsuarioAdmin.php?id={{$value->id}}"><i class="far fa-eye"></i></a>
          </td>
          <td>
            <a href="modificarUsuarioAdmin.php?id={{$value->id}}"><i class="far fa-edit"></i></a>
          </td>
          <td>
            <a href="eliminarUsuarioAdmin.php?id={{$value->id}}"><i class="far fa-trash-alt"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
