<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // SHOW REGISTER / CREATE FORM //

    public function create() {
        return view('users.register');
    }
}
