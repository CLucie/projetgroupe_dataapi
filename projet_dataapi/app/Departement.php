<?php

namespace App;


class Departement
{
    public static function all(){
    	$reponse = file_get_contents('http://www.data.gouv.fr/fr/datasets/r/4e0da524-ac63-4e8d-a6b4-9fafe3b3bc38');
	return(json_decode($reponse)->features);
    }
}


//api musées
	