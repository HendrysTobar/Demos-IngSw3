<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device, initial-scale=1"/>
    <title>Página web con Server Side Scripting</title>
    <link rel="stylesheet" type="text/css" href="theme.css">
    <script src="CartasAJAX.js"></script>
</head>
<body>
        <div class="centrado carta">
                
            <form class = "centrado caja" method="get">
                    <select name="cartas" onchange="loadDoc(this.value)">
                        <option value"0"> --Seleccione--</option>
                        <option value="0">Bola</option>
                        <option value="1">Dragón</option>
                        <option value="2">Ángel</option>                
                        <option value="3">Flor</option>
                    </select>
                    
            </form>
            <img id="loading" class="centrado caja loading" src="img/loading.gif"/>   
            <div id="cartas">  
                           
            </div>
        <p class="centrado caja footer"> 
            Sitio web creado dinámicamente con la carta solicitada, usando PHP, los datos se han descargado con JSON
        </p>                
    </div>  
    <div id="cartaSnippet" class="snippet">
        <div id="cardName" class="centrado caja titulo">
            <h1>Nombre de la carta</h1>
        </div>       
        
        <img id="cardImg" class="centrado caja" src="./img/fireball.jpg"/>             
        <p id="cardTexto" class="centrado caja"> 
                Texto de la carta
        </p>
    </div>    
</body>
</html>