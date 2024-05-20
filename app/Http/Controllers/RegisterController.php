<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view("Auth.register");
    }

    public function siswa()
    {
        return view("Auth.register_siswa");
    }

    public function guru()
    {
        return view("Auth.register_guru");
    }
}
