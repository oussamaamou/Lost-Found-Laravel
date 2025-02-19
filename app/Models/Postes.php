<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postes extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'titre',
        'categorie_id',
        'description',
        'dateAction',
        'lieuAction',
        'email',
        'telephone',
        'users_id'
    ];

}
