<?php

namespace App\Http\Controllers;

use App\Musee;
use Illuminate\Http\Request;

class MuseesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
           $cartes = Musee::all();

           return view('sophie' , compact('cartes'));  
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Musee  $musee
     * @return \Illuminate\Http\Response
     */
    public function show($uid)
    {
        $carte = Musee::get($uid);

    }

}
