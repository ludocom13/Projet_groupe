<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    protected $fillable = [

                'nom',
                'description',
                'nb_place',
                'place_prise',
                'userID',
                'datEdite',
                'statut',
                'dateMaj',

            ];

}
