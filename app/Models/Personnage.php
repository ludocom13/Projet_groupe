<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    protected $fillable = [

                    'nom',
                    'specialites',
                    'magie',
                    'force',
                    'agilite',
                    'intelligeance',
                    'pv',
                    'userID',
                    'description',
                    'datEdite',
                    'statut',
                    'dateMaj',
                ];
}
