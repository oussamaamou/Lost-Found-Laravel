<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosteController extends Controller
{
    //
    public function getAllPoste(){
        return view('postes.index');
        
    }
}
