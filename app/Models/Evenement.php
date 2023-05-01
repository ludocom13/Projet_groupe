<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = ['id'];
    public $timestamps = false;   

    protected $fillable = [

            'titre',
            'lieu',
            'description',
            'date',
            'comments',
            'notes',
            'participants',
            'public',
            'click',
            'statut',
            'datEdite',
            'dateMaj',
            'agent',
            'link_img',

            ];
}
