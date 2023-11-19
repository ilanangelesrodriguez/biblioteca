<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use JetBrains\PhpStorm\NoReturn;

class UserController extends Controller
{
    //
    public function index(int $user_id): view
    {
        //dd($user_id);
        //return '<h1>Hola mundo desde un controlador: '.$user_id.'</h1>';

        // SELECT * FROM users;
        // dd( User::all() );

        // SELECT * FROM users WHERE id=1;
        $user = User::find($user_id);
        //dd($user);

        return view('welcome', ['user'=>$user]);
    }
}
