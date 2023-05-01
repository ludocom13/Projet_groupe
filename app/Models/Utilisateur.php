<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Utilisateur extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = ['id'];

    protected $fillable = [

                'login',
                'identifiant',
                'nom',
                'prenom',
                'email',
                'telephone',
                'password',
                'description',
                'categorie',
                'domaine',
                'datEdite',
                'statut',
                'dateMaj',

            ];
}
