<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\writting;
use App\user;
use App\users;

class WrittingsController extends Controller
{
    public function newsfeed(){
      $escritos = writting::all();
      return view('NewsFeed', compact('escritos'));
    }

    public function misEscritos(){
      $email=Auth::user()->id;
       $id =user::select('id')->where('email',$email)->get();
      $misEscritos = writting::where('id_writter','=',$id)->get();
      return view('MisEscritos', compact('misEscritos'));
    }

}
