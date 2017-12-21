<?php
namespace App;
class Musee 
{
 //    public static function all() {
	//     $reponse = file_get_contents('http://www.data.gouv.fr/fr/datasets/r/4e0da524-ac63-4e8d-a6b4-9fafe3b3bc38');
	//     return(json_decode($reponse)->features);
	// }

	// public static function get($uid) {
		
	// }

	public static function all() {
	    $reponse = file_get_contents('https://data.culturecommunication.gouv.fr/api/records/1.0/search/?dataset=nuits-des-musees&rows=500&facet=region&facet=department&facet=city&refine.region=Auvergne-Rh%C3%B4ne-Alpes');
	    return(json_decode($reponse)->records);
	}

	public static function departement($nom) {
	    $reponse = file_get_contents('https://data.culturecommunication.gouv.fr/api/records/1.0/search/?dataset=nuits-des-musees&rows=500&facet=region&facet=department&facet=city&refine.region=Auvergne-Rh%C3%B4ne-Alpes&refine.department='.$nom);
	    return(json_decode($reponse)->records);
	}

	public static function get($uid) {
		
	}
}