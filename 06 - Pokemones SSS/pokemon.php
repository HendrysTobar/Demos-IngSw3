<?php
class Pokemon
{
    public $numero = 0;
    public $nombre = null;
    public $img = null;
    public $fuerza = null;
    public $tipo = null;
    public $velocidad = null;
    public $evolucion = null;

    public function __construct($numero, $nombre, $img, $fuerza, $tipo, $velocidad, $evolucion)
    {
        $this->numero = $numero;
        $this->nombre = $nombre;
        $this->img = $img;
        $this->fuerza = $fuerza;
        $this->tipo = $tipo;
        $this->velocidad = $velocidad;
        $this->evolucion = $evolucion;
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
     * Get the value of fuerza
     */ 
    public function getFuerza()
    {
        return $this->fuerza;
    }

    /**
     * Set the value of fuerza
     *
     * @return  self
     */ 
    public function setFuerza($fuerza)
    {
        $this->fuerza = $fuerza;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of velocidad
     */ 
    public function getVelocidad()
    {
        return $this->velocidad;
    }

    /**
     * Set the value of velocidad
     *
     * @return  self
     */ 
    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;

        return $this;
    }

    /**
     * Get the value of evolucion
     */ 
    public function getEvolucion()
    {
        return $this->evolucion;
    }

    /**
     * Set the value of evolucion
     *
     * @return  self
     */ 
    public function setEvolucion($evolucion)
    {
        $this->evolucion = $evolucion;

        return $this;
    }
}

?>