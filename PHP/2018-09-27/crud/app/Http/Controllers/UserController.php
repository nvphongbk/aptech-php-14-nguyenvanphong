<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function hienthitatcanguoidung()
    {
        $users = user::all();
        return view ('welcome',['users' => $users]);
    }
}
