<?php

    $idPokemon = $_GET["id"];
    $archivo = json_encode($idPokemon);
    file_put_contents("archivoPokemones.json", $archivo);

    

?>