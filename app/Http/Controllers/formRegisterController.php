<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formRegisterController extends Controller
{
    public function index(){
        return view('user.formRegister');
    }
}
