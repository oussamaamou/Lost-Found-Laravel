<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postes;

class PosteController extends Controller
{
    //
    public function getAllPostes(){
        return view('postes.index');
        
    }

    public function getMyPostes(){

        $postes = Postes::all();
        return view('dashboard', ['postes' => $postes]);
    }

    public function create(Request $request){

        $data =  $request->validate([

            'titre' => 'required|string',
            'description' => 'required|string',
            'categorie_id' => 'required|numeric',
            'telephone' => 'required|string',
            'email' => 'required|email',
            'dateAction' => 'required|date',
            'lieuAction' => 'required|string',
            'users_id' => 'required|numeric'
            
        ]);

        $newPoste = Postes::create($data);
        return redirect(route('dashboard'));
    }
}
