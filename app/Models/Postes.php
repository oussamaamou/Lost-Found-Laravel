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

    public function commentaires(){

        return $this->hasMany(Commentaire::class, 'poste_id');
    }

    public function user(){

        return $this->belongsTo(User::class, 'users_id');
    }


}
