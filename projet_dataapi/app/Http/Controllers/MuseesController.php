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

<<<<<<< HEAD
           return view('sophie' , compact('cartes'));        
=======
           return view('accueil' , compact('cartes'));        
>>>>>>> master
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
<<<<<<< HEAD
        
=======

>>>>>>> master
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Musee  $musee
     * @return \Illuminate\Http\Response
     */
    public function edit(Musee $musee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Musee  $musee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Musee $musee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Musee  $musee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Musee $musee)
    {
        //
    }
}
