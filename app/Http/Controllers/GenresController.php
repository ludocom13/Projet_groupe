<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class GenresController extends Controller
{
    public function aventure()
    {
        return
        view("/genres/aventure");
    }
    public function science_fiction()
    {
        return
        view("/genres/science_fiction");
    }
    public function epouvante()
    {
        return
        view("/genres/epouvante");
    }
    public function animation()
    {
        return
        view("/genres/animation");
    }
    public function thriller()
    {
        return
        view("/genres/thriller");
    }
    public function action()
    {
        return
        view("/genres/action");
    }
    public function comedie()
    {
        return
        view("/genres/comedie");
    }
    public function vues()
    {
        return
        view("vues");
    }
    public function films()
    { return 
        view("films/create");
    } 
    
}