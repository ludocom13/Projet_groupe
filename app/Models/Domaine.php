<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = ['id'];

    protected $fillable = [

                'domaine',
                'groupe',
                'userID',
                'nom',
                'note',
                'description',
                'statut',
                'datEdite',
                'dateMaj',

            ];

}
