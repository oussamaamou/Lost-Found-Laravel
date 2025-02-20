<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postes;
use App\Models\Categorie;

class PosteController extends Controller
{
    //
    public function getAllPostes(){
        return view('postes.index');
        
    }

    public function getMyPostes(){

        $postes = Postes::where('users_id', auth()->id())->get();
        $categories = Categorie::all();
        return view('dashboard', ['postes' => $postes], ['categories' => $categories]);
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

    public function edit(Postes $poste){
        return view('postes.edit', ['poste' => $poste]);

    }

    public function editPoste(Postes $poste, Request $request){

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

        $poste->update($data);

        return redirect(route('dashboard'));


    }

    public function deletePoste(Postes $poste){
        
        $poste->delete();
        return redirect(route('dashboard'));

    }

}
