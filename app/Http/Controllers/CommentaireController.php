<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Commentaire;

class CommentaireController extends Controller{

    public function createComment(Request $request){

        $data =  $request->validate([

            'users_id' => 'required|numeric',
            'contenue' => 'required|string',
            'poste_id' => 'required|numeric'

        ]);

        $newComment = Commentaire::create($data);
        return redirect(route('dashboard'));
    }

    public function getCommentsByPost($poste_id) {
        
        $comments = Commentaire::where('poste_id', $poste_id)->with('user')->get();
        return view('dashboard', compact('comments', 'poste_id'));
    }

}
