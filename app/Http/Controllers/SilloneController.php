<?php

namespace App\Http\Controllers;

use App\Models\Sillone;
use Illuminate\Http\Request;

class SilloneController extends Controller
{
    public function index (){
        $sillones = Sillone::OrderBy('created_at','desc')->get();
        return view('sillones.index', compact('sillones'));
    }

/* ----------------------------------------------------------------------- */
    public function crear (){
        return view('sillones.crear');
    }

/* ----------------------------------------------------------------------- */
    public function modificar (){
        return view('sillones.modificar');
    }
}
