<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayController extends Controller
{
        public function ver(){
            return view('auth.play');
        }
}
