<?php
namespace App;
class Musee 
{
    static function all() {
    $reponse = file_get_contents('http://www.data.gouv.fr/fr/datasets/r/c08e1921-c538-4092-96ca-538553a4903b');
    return(json_decode($reponse)->features);
}
}