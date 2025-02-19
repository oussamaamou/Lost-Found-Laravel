<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function getAllCategories(){

        $categories = Categorie::all();
        return view('dashboard', ['categories' => $categories]);
    }
}
