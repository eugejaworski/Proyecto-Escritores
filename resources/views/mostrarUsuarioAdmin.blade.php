@extends('layouts.mainuser')
@section('content')

<!DOCTYPE html>
 <?php $filename="Usuario";
 /*require_once("autoload.php");
 $id_usuario=$_GET["id"];
 $usuarioSeleccionado = Query::mostrarUsuario($pdo,'users',$id_usuario);
 $where="where id_writter=$id_usuario";
 $escritousuario=Query::listado($pdo,'writtings', $where);
 $nombrecompleto=$usuarioSeleccionado[0]['name'].' '. $usuarioSeleccionado[0]['surname'];
 */
 ?>

   <head>
     <meta charset="utf-8">
     <title>{{ Auth::user()->name}}</title>
   </head>
   <body>
       <?php/* if ($_SESSION['role'] == 1 ):?>
           <?php  include("Includes/HeaderUser.php"); ?>
         <?php else: ?>
           <?php include("Includes/HeaderAdmin.php"); ?>
         <?php endif; */?>

     <div class="UsuariosIndiv">
       <h2 class="tituloUsuario"><?=$nombrecompleto?></h2>

       <div class='infousuario'>
         <div class="photo">
                 <img class="fotousuario" src="imagenes/<?=$usuarioSeleccionado[0]["escritor"];?>" alt="Escritor.<?=$nombrecompleto?>" >
         </div>
         <div class="info">
             <div class="infous">
               <p class="labelus">Nombre:</p> <p  class="outputus"><?=$nombrecompleto?></p>
             </div>
             <div class="infous">
               <p class="labelus">Email:<p>
               <p class="outputus"> <?=$usuarioSeleccionado[0]["email"];?></p>
             </div>
             <div class="infous">
               <p class="labelus">Perfil:</p>
                 <p class="outputus">
               <?php if ($usuarioSeleccionado[0]["role"]==1): ?>
                 Escritor
                 <?php else: ?>
                 Administrador
               <?php endif; ?>


               </p>

             </div>

         </div>

       </div>


       <h2 class="tituloUsuario">ESCRITOS</h2>
       <table class="table">
         <thead>
           <tr>
             <th  scope="col">ID</th>
             <th scope="col">Titulo</th>
             <th class="middle" scope="col">Escrito Completo</th>
             <th class="middle" scope="col">Likes</th>

           </tr>
         </thead>
         <tbody>
             <?php foreach ($escritousuario as $key => $value):?>
               <tr>

                 <th scope="row"><?= $value["id"] ?></th>
                 <td><?=$value["title"];?></td>
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

   </body>


@endsection
