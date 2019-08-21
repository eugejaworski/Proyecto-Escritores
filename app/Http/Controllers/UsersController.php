<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class UsersController extends Controller
{
  public function usuariosAdmin(){
    $listadoUsuarios = users::all();
    return view('usuariosAdmin', compact('listadoUsuarios'));
  }
}

  //not so sure about this :/ //
