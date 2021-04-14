<?php

/**
 * Class Receita
 * @author Maico Tedesco Mendes
 */
class Receita
{
    private $id_receita;
    private $titulo;
    private $id_categoria;
    private $id_tipo;
    private $receita;

    public function __construct($t, $id_c, $id_t, $r)
    {
        $this->titulo = $t;
        $this->id_categoria = $id_c;
        $this->id_tipo = $id_t;
        $this->receita = $r;
    }

    // Metodos set
    public function setIdReceita($id_r) {
        $this->id_receita = $id_r;
    }

    public function setTitulo($t) {
        $this->titulo = $t;
    }

    public function setIdCategoria($id_c) {
        $this->id_categoria = $id_c;
    }

    public function setIdTipo($id_t) {
        $this->id_tipo = $id_t;
    }

    public function setReceita($r) {
        $this->receita = $r;
    }

    // Metodos get
    public function getIdReceita() {
        return $this->id_receita;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getIdCategoria() {
        return $this->id_categoria;
    }

    public function getIdTipo() {
        return $this->id_tipo;
    }

    public function getReceita() {
        return $this->receita;
    }
}
