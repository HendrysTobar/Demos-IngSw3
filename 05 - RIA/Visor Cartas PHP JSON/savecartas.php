<?php
//Este script guard el arreglo de cartas en un archivo json
//Se ejecuta en una consola de comandos con el comando: php savecartas.php
include 'carta.php';

$cartas = array();
$cartas[0] = new Carta(0,'Bola de fuego', 'fireball.jpg');
$cartas[0]->setTexto("Esta Bola de Fuego destruye a todos los oponentes en el campo de batalla");
$cartas[1] = new Carta(1,'Dragon Shivano', 'dragon.jpg');
$cartas[1]->setTexto("El dragón Shivano destruyó la economía de Wariburgo al robar todas las monedas de oro");
$cartas[2] = new Carta(2,'Ángel de Esperanza', 'angel.jpg');
$cartas[2]->setTexto("El Ángel de Esperanza trajo alegría y solidaridad entre la gente de Wariburgo");
$cartas[3] = new Carta(3,'Flor Negra', 'flornegra.jpg');
$cartas[3]->setTexto("La Flor negra ha engañado a muchos con su apariencia");

$cartas_json =  json_encode($cartas);
$fp = fopen('cartas.json', 'w');
fwrite($fp, $cartas_json);
fclose($fp);

?>