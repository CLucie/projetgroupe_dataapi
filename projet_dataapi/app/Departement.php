<?php

namespace App;


class Departement
{
    static function all(){
    	$reponse = file_get_contents('https://data.culturecommunication.gouv.fr/api/records/1.0/search/?dataset=nuits-des-musees');
	return(json_decode($reponse)->records);
    }
}


//api musées
	