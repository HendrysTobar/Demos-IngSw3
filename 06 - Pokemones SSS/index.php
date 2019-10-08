<!DOCTYPE html>
<?php
include "obtenerPokemon.php";
?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device, initial-scale=1"/>
    <title>Página web con Server Side Scripting</title>
    <link rel="stylesheet" type="text/css" href="theme.css">
    <script src="arruinador.js"></script>

</head>
<body>
    <?php foreach($pokes as $p):?>
        <div class="centrado carta">
            <div class="centrado caja">
                <h1><?php echo $p->getNombre(); ?></h1>
            </div>     
           
            <img class="centrado caja" src="./img/<?php echo $p->getImg()?>"/>
            <p class="centrado caja"> 
                <?php echo $p->getFuerza()?>
            </p>
        </div>   
    <?php endforeach;?>    
            <form class = "centrado caja"  method="get">
                <select name="tipo" onchange="this.form.submit()">
                    <option value"0"> --Seleccione--</option>
                    <option value="agua">Agua</option>
                    <option value="fuego">Fuego</option>
                    <option value="normal">Normal</option>                
                </select>
                
            </form>
        
            <p class="centrado caja"> 
                    Sitio web creado dinámicamente con la carta solicitada, usando PHP
            </p>    
            
        

</body>
</html>