<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;


class Inscriptionutilisateur extends Model implements Authenticatable
{
    use BasicAuthenticatable;

    protected $fillable = ['mot_de_passe', 'email'];

/**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mp;
    }
}