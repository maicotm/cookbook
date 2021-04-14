<?php

/**
 * Class Tipo
 * @author Maico Tedesco Mendes
 */
class Tipo
{
    private $id_tipo;
    private $tipo;

    public function __construct($t)
    {
       $this->tipo = $t;
    }

    // Metodos set
    public function setIdTipo($id_t) {
        $this->id_tipo = $id_t;
    }

    public function setTipo($t) {
        $this->tipo = $t;
    }

    // Metodos get
    public function getIdTipo() {
        return $this->id_tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }

}
