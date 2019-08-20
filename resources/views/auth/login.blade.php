@extends('layouts.mainadmin')

@section('content')
<?php
  $filename="login";

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
        <form class="signup-form" action="login.php" method="POST">

          <h5 class="h5-login"> INGRESAR </h5>

          <div class="signup-login">
            <ul>
              <li class="signup-si">
                <a href="signup.php" class="<?php if ($filename=="signup") {
                    echo 'active-sign';
                }?>">Sign Up</a>
              </li>

              <li class="signup-lo">
                <a href="login.php" class="
                <?php if ($filename=="login") {
                    echo 'active-sign';
                }?>
                ">Log In</a>
              </li>
            </ul>

          </div>

          <div class="pregunta-signup">
            <label for="email">E-mail *</label>
            <input id="email" type="text" name="email" placeholder="usuario@email.com" value="<?=(isset($persist['email'])?$persist['email']: "");?>">
            <p class="error-for">
            <?=(isset($errores['email'])?$errores['email']: "");?>
            </p>
          </div>

          <div class="pregunta-signup">
            <label for="contrasenia">Contraseña *</label>
            <input id="contrasenia" type="password" name="password" placeholder="******">
            <p class="error-for">
            <?=(isset($errores['password'])?$errores['password']: "");?>
            </p>
          </div>

          <div class="pregunta-regis">
            <p class="error-for">
            <?=(isset($errores['verification'])?$errores['verification']: "");?>
            </p>
          </div>

          <div class="pregunta-recor">
            <label for="recordarme"> Recuerdame </label>
              <input class="recordarme" id="recordarme" type="checkbox" name="recordar" value="recordar"/>

          </div>



          <div class="pregun-regis olvidarcont">
            <a class="registrarse" href="login.php"> No me acuerdo la contraseña</a>
          </div>

          <div class="pregun-regis">
            <button class="registrarse" type="submit" value="login" action="login.php">Login</button>
          </div>

      </form>
    </main>
    </div>

  </body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
