@extends('layouts.main')
@section('content')
<?php
$filename="signup";
$bookquote=["'We are all storytellers.  We all live in a network of stories. There isn´t a stronger connection between people than sotrytelling.'","'Storytelling is the most powerful way to put ideas into the world today '","'Facts tell, stories sell'","'when you stand and share your sotry ina empowering way, your sotry will heal you and your story will heal sombody else '","'Stories can conquer fear, you know, they can make the hear bigger'","'A short story is a diffrent thing all togheter - a short story is like a kiss in the dark from a stranger.'","'what are we but our stories '","'Great stories happen to those who can tell them '","'Stories of imagination tend to upset those without one '","'the universe is made of stories not of atoms'","'you can always edita a bad page.  You can´t edit a blank page.'","'Every secret of a writer´s soul, every experience of his life, every qulity of his mind, is written large in his works.'",];
$quote=$bookquote[rand(0, (count($bookquote)-1))];
?>
<body>


  <div class="paginasignup">
      <div class="quote">
        <p class="p-quote">
          <?=$quote?>
        </p>
      </div>

    <main class="main-signup">

      <form class="signup-form" action="{{ route('register') }}" method="post" enctype="multipart/form-data" >
        @csrf

        <h5 class="h5-log"> CREAR CUENTA NUEVA </h5>

        <div class="signup-login">
          <ul>
            <li class="signup-si">
              <a href="register" class="<?php if ($filename=="signup") {
                  echo 'active-sign';
              }?>">Sign Up</a>
            </li>

            <li class="signup-lo">
              <a href="login" class="
              <?php if ($filename=="login") {
                  echo 'active-sign';
              }?>
              ">Log In</a>
            </li>
          </ul>

        </div>

        <div class="pregunta-signup">
          <label for="name">Name *</label>
          <input id="name" type="text" name="name" placeholder="Miguel" value="{{ old('name') }}" >
          @if ($errors->has('name'))
          <p class="error-for">

                <strong>{{ $errors->first('name') }}</strong>
          </p>
            @endif
        </div>

        <div class="pregunta-signup">
          <label for="apellido">Apellido *</label>
          <input id="apellido" type="text" name="surname" placeholder="Sanchez" value="{{ old('surname') }}">

          @if ($errors->has('surname'))
          <p class="error-for">

                <strong>{{ $errors->first('surname') }}</strong>
          </p>
            @endif
        </div>

        <div class="pregunta-signup">
          <label for="email">E-mail *</label>
          <input id="email" type="text" name="email" placeholder="usuario@email.com" value= "{{ old('email') }}">
          @if ($errors->has('email'))
          <p class="error-for">

                <strong>{{ $errors->first('email') }}</strong>
          </p>
            @endif
        </div>

        <div class="pregunta-signup">
          <label for="contrasenia">Contraseña *</label>
          <input id="contrasenia" type="password" name="password" placeholder="******">
          @if ($errors->has('password'))
          <p class="error-for">

                <strong>{{ $errors->first('password') }}</strong>
          </p>
            @endif
        </div>

        <div class="pregunta-signup">
          <label for="verificaContrasenia">Verificar Contraseña *</label>
          <input id="verificaContrasenia" type="password" name="password_confirmation" placeholder="******">
          <p class="error-for">  </p>
        </div>


        <div class="pregunta-signup imagen">
          <input type="file" name="escritor" value="" >
          @if ($errors->has('escritor'))
          <p class="error-for">

                <strong>{{ $errors->first('escritor') }}</strong>
          </p>
            @endif
        </div>

        <div class="pregun-regis">
          <button class="registrarse" type="submit" value="signup" action="signup.php">Registrar</button>
        </div>



    </form>
  </main>
  </div>

</body>

@endsection
