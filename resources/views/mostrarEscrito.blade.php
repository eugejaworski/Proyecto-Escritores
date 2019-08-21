@extends('layouts.mainuser')
@section('content')

<!DOCTYPE html>
<?php
$filename="Escritos";
/*require_once("autoload.php");
  if(!isset($_SESSION["email"]) || $_SESSION['role']==1 ){
    redirect("signup.php");

  }
  $listadoUsuarios = Query::listado($pdo,'writtings');*/
 ?>


  <head>
    <html lang="en" dir="ltr">
    <meta charset="utf-8">
    <title></title>
  </head>

  <body> //
    <?php /* if ($_SESSION['role'] == 1 ):?>
      <?php  include("Includes/HeaderUser.php"); ?>
    <?php else: ?>
      <?php include("Includes/HeaderAdmin.php"); ?>
    <?php endif; ?>

    include("Includes/jquerys.php"); */?>

    <div class="listados">
      <h2 class="listatitulo">ESCRITOS</h2>
      <div class="">
        <table class="table">
          <thead>
            <tr>
              <th  scope="col">ID</th>
              <th scope="col">Titulo</th>
              <th class="middle" scope="col">Autor</th>
              <th class="middle" scope="col">Escrito Completo</th>
                <th class="middle" scope="col">Likes</th>

            </tr>
          </thead>
          <tbody>
              <?php foreach ($listadoUsuarios as $key => $value):?>
                <tr>

                  <th scope="row"><?= $value["id"] ?></th>
                  <td><?=$value["title"];?></td>


                  <?php
                  $usuarioencontrado=Query::mostrarUsuario($pdo,'users',$value['id_writter']);
                  $nombrecompleto=$usuarioencontrado[0]['name'] . " ". $usuarioencontrado[0]['surname'];
                  ?>
                  <td><a class="middle" href="mostrarUsuarioAdmin.php?id=<?=$value['id_writter'];?>">
                      <?=$nombrecompleto?>
                      </a>
                  <td><a class="middle" href="mostrarEscrito.php?id=<?=$value['id'];?>">
                        <i class="far fa-eye"></i>
                      </a>
                  </td>
                  <td>
                      <div class="middle">
                        <?=$value['likes'];?>
                        <i class="fas fa-thumbs-up"></i>

                      </div>


                  </td>

               </tr>
              <?php endforeach;?>
          </tbody>
      </div>

    </div>
  </body>
</html>

@endsection
