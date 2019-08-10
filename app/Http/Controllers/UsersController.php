<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class UsersController extends Controller
{
    $users= users::all();
    dd($users);
}
