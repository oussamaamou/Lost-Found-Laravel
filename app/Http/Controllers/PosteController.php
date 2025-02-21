<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postes;
use App\Models\Categorie;

use function Laravel\Prompts\search;

class PosteController extends Controller
{
    
    public function getAllPostes(){
        $postes = Postes::all();
        $categories = Categorie::all();
        return view('postes.index', ['postes' => $postes], ['categories' => $categories]);
        
    }

    public function getMyPostes(){

        $postes = Postes::where('users_id', auth()->id())->with('user')->get();
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

    public function search(Request $request){

        $search = $request->search;
        $categories = Categorie::all();

        $postes = Postes::where(function($query) use ($search) {
            $query->where('titre', 'like', "%$search%")
            ->orWhere('description', 'like', "%$search%");
        })

        ->orWhereHas('user', function($query) use ($search){
            $query->where('name', 'like', "%$search%");
        })

        ->get();

        return view('postes.index', compact('postes','search'), ['categories' => $categories]);
    }

    public function filterByCategorie(Request $request){

        $filter = $request->filter;
        $categories = Categorie::all();


        $postes = Postes::where(function($query) use ($filter){
            $query->where('categorie_id', 'like', "%$filter%");
        })
        ->get();

        return view('postes.index', compact('postes','filter'), ['categories' => $categories]);

    }

}
