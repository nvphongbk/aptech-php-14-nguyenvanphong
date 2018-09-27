<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    function hienthitatcanguoidung()
    {
        $users = user::all();
        return view ('welcome',['users' => $users]);
    }
}
