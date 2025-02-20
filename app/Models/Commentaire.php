<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'users_id',
        'contenue',
        'poste_id'
    ];

    public function user(){

        return $this->belongsTo(User::class, 'users_id');
    }


}
