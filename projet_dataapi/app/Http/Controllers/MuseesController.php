<?php

namespace App\Http\Controllers;

use App\Musee;
use Illuminate\Http\Request;

class MuseesController extends Controller
{

    private $departements;

    public function __construct() {
        $this->departements = array("Ain","Allier","Ardèche","Cantal","Drôme","Haute-Loire","Haute-Savoie","Isère","Loire","Métropole de Lyon","Puy-de-Dôme","Rhône","Savoie");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartes = Musee::all();
        $departements = $this->departements;
        return view('accueil' , compact('cartes', 'departements'));
    }

    public function departement(Request $request)
    {
        $cartes = Musee::departement($request->nom);
        $departements = $this->departements;
        return view('accueil' , compact('cartes', 'departements'));
    }

   
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Musee  $musee
     * @return \Illuminate\Http\Response
     */
    // public function show($uid)
    // {
    //     $carte = Musee::get($uid);

    // }


