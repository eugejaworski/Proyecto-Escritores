<header class="header">
  <nav class="navbar navbar-expand-lg header-navbar navbar-dark" style="background-color: rgb(87, 197, 164)";>
    <!-- LOGO -->
    <div class="navbar-div" href="#">
      <img src="ImagenesDH/logoescribir.png" width="50" height="50" class="d-inline-block align-top img-header-logo" alt="">
    <a class="navbar-brand"  href="Home.php">
      Escribe Conmigo
    </a>
  </div>


    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse div-col" id="navbarText">
      <ul class="navbar-nav ml-auto  ul-header">

        <!--HOME-->

        <li class="nav-item">
          <a class="nav-link <?php if ($filename=="Home") {
              echo 'active';
          } ?> " href="/EscribeConmigo">Home
            <span class="sr-only">(current) </span>
          </a>
        </li>

        <!--NOSOTROS-->
        <li class="nav-item ">
          <a href="/Nosotros" class="nav-link <?php if ($filename=="Nosotros") {
              echo 'active';
          } ?>">Nosotros</a>
        </li>

        <!--Reglas-->
        <li class="nav-item">
          <a class="nav-link <?php if ($filename=="Reglas") {
              echo 'active';
          } ?> " href="/PreguntasFrecuentes">Preguntas Frecuentes</a>
        </li>


        <!-- DROPDOWN QUE NO VAMOSA  USAR AHORA
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Nosotros
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Quienes Somos</a>
                <a class="dropdown-item" href="#">Historia</a>
                <a class="dropdown-item" href="#">Reglas</a>
         </div>
       </li>
     -->
       <!--LOGIN SINGUP-->
       <li class="nav-item">
         <a class="nav-link login <?php if ($filename=="login" && $filename=="signup" ) {
             echo 'active';
         } ?>" href="signup.php">Ingresar</a>
       </li>
      </ul>
      <span class="navbar-text"> </span>
    </div>

  </nav>
</header>
