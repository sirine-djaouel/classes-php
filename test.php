<?php

class Animal{
    private $_deplacement
    private $_milieux
}
//Variable global
$metre =5;

//Prototype ou Model de la fonction

function animal_move($se_deplace)
{
    //variable local (n'existe pas dans le contexte global)
    $variable=36;
    $variable2="Sirine";
    $deplace = $se_deplace + 5;
    $array = [$variable, $variable2, $deplace];

    // retourne les valeurs dont on a besoin
    return $array;
}
//Appel de la fonction
$nouvelle_valeur = animal_move($metre);
var_dump($nouvelle_valeur);
?>