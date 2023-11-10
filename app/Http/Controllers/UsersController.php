<?php

namespace App\Http\Controllers;

use App\Models\User as ModelUser;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $user = ModelUser::get();
        return view('users.index', ['users' => $user]);
    }
}
