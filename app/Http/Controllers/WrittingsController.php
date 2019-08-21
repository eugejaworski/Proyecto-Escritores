<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\writting;

class WrittingsController extends Controller
{
    public function newsfeed(){
      $escritos = writting::all();
      return view('NewsFeed', compact('escritos'));
    }

    public function newsfeed(){
      $escritos = writting::all();
      return view('NewsFeed', compact('escritos'));
    }
}
