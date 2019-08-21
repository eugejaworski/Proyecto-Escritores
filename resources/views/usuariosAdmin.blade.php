@extends('layouts.mainuser')

@section('content')

 <?php

$filename="Usuarios";
 /*
  if(!isset($_SESSION["email"]) || $_SESSION['role']==1 ){
    redirect("signup.php");
  }
  $listadoUsuarios = Query::listado($pdo,'users','where role=1');*/
 ?>

  <body>
    <?php /*if ($_SESSION['role'] == 1 ):*/?>

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
              <?php foreach ($listadoUsuarios as $key => $value):?>
                <tr>


                  <th scope="row"><?= $value["id"] ?></th>
                  <td><?=$value["name"];?></td>
                  <td><?=$value["surname"];?></td>
                  <td><a href="mostrarUsuarioAdmin.php?id=<?=$value['id'];?>">
                        <i class="far fa-eye"></i>
                      </a>
                  </td>
                  <td><a href="modificarUsuarioAdmin.php?id=<?=$value['id'];?>">
                        <i class="far fa-edit"></i>
                      </a>
                  </td>
                  <td><a href="eliminarUsuarioAdmin.php?id=<?=$value['id'];?>">
                        <i class="far fa-trash-alt"></i>
                      </a>
                  </td>

                </tr>
              <?php endforeach;?>
          </tbody>
      </div>

    </div>
  </body>
</html>


@endsection
