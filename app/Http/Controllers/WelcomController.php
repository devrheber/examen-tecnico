<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class WelcomController extends Controller
{
    public function index() {
        return view('welcome');
    }
}
