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
    
    public static function createFromArray($arr)
    {
        $carta = new Carta( $arr["numero"],$arr["nombre"],$arr["img"] );
        $carta->setTexto($arr["texto"]);
        return $carta;
        
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
?>