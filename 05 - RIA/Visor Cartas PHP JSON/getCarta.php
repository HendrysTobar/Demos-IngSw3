<?php

include 'carta.php';
// Read JSON file
$json = file_get_contents('./cartas.json');

//Decode JSON
$cartas = json_decode($json,true);

$c = Carta::createFromArray($cartas[0]);

if(isset($_GET["cartas"]))
{
    $n = $_GET["cartas"];
    if($n < count($cartas))
    {
        $c =  Carta::createFromArray($cartas[$n]);
    }
    else
    {
        echo "Error, número dado no encontrado";
    }            
}
else
{
    echo "Error, número de carta no especificado"; 
}

echo json_encode($c);

?>
