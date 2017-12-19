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
        
           $titis = Musee::all();

         return view('sophie' , compact('titis'));           
    }
}
