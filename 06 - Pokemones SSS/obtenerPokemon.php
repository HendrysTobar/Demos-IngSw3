<?php
include "BDPokemones.php";

$pokes = array();
//Si está establecido el parámetro "cartas"
if(isset($_GET["tipo"]))
{

    $t = $_GET["tipo"];
    foreach ($pokemones as $p) 
    {
        # code...
        if($p->getTipo() == $t)
        {
            array_push($pokes, $p);
        }

    }
            
}
else
{
    echo "Error, tipo de Pokemon especificado";

 
}

var_dump($pokes);

?>