<!DOCTYPE html>
<?php
class Carta
{
    public $numero = 0;
    public $nombre = null;
    public $img = null;
    public $texto = null;

    function __construct(int $numero, string $nombre, string $img){
        $this->numero = $numero;
        $this->nombre = $nombre;
        $this->img = $img;

    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of img
     */ 
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */ 
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

       /**
     * Get the value of texto
     */ 
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set the value of texto
     *
     * @return  self
     */ 
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }
}

$cartas = array();
$cartas[0] = new Carta(0,'Bola de fuego', 'fireball.jpg');
$cartas[0]->setTexto("Esta Bola de Fuego destruye a todos los oponentes en el campo de batalla");
$cartas[1] = new Carta(1,'Dragon Shivano', 'dragon.jpg');
$cartas[1]->setTexto("El dragón Shivano destruyó la economía de Wariburgo al robar todas las monedas de oro");
$cartas[2] = new Carta(1,'Ángel de Esperanza', 'angel.jpg');
$cartas[2]->setTexto("El Ángel de Esperanza trajo alegría y solidaridad entre la gente de Wariburgo");




$c = $cartas[0];
if(isset($_GET["cartas"]))
{
    $n = $_GET["cartas"];
    if($n < count($cartas))
    {
        $c = $cartas[$n];
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
    <?php if($c != null):?>
        <div class="centrado carta">
            <div class="centrado caja">
                <h1><?php echo $c->getNombre(); ?></h1>
            </div>     

            <img class="centrado caja" src="<?php echo $c->getImg()?>"/>
            <p class="centrado caja"> 
                <?php echo $c->getTexto()?>
            </p>
            
            <form class = "centrado caja" method="get">
                <select name="cartas" onchange="this.form.submit()">
                    <option value"0"> --Seleccione--</option>
                    <option value="0">Bola</option>
                    <option value="1">Dragón</option>
                    <option value="2">Ángel</option>                
                </select>
                
            </form>
        
            <p class="centrado caja"> 
                    Sitio web creado dinámicamente con la carta solicitada, usando PHP
            </p>    
            
        </div>   
    <?php endif;?>

</body>
</html>