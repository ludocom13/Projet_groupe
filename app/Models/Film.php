<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'titre',
        'annee',
        'auteur',
        'annonce',
        'categorie',
    ];
    protected $guarded =[
        "id",
    ] ;
}
