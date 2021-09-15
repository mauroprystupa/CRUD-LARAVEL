<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SilloneController extends Controller
{
    public function index (){
        return view('sillones.index');
    }
    public function crear (){
        return view('sillones.crear');
    }
    public function modificar (){
        return view('sillones.modificar');
    }
}
