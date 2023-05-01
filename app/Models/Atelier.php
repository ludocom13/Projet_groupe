<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atelier extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    protected $fillable = [

                'sujet',
                'domaine',
                'userID',
                'nom',
                'note',
                'description',
                'statut',
                'datEdite',
                'dateMaj',

            ];
}
