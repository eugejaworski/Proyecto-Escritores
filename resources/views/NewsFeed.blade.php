@extends('layouts.mainuser')
@section('content')


<?php
  $filename="NewsFeed";
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Feed</title>
  </head>



        <?php foreach ($escritos as $key => $value):?>
          <div class="EscritoInd">

            <h2 class="title-me">
                "<?= strtoupper($value["title"]);?>"
              </h2>
            <h2 class='subtitle'>
              <?=$value["subtitle"];?>
     </h2>
     <h6 class="escritor">
       <?= $value["name"] . " " . $value["surname"];;?>
     </h6>
     <div class="fondo-escrito">
     <p class="body">
           <?= $value["body"]; ;?>
     </p>
   </div>
     <p class="likes-me">
         <strong><?= $value["likes"];?> </strong>
           <i class="fas fa-thumbs-up"></i>
     </p>
   </div>
          <?php endforeach;?>

      </body>

@endsection
