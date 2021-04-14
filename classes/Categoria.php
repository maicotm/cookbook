<?php

/**
 * Class Categoria
 * @author Maico Tedesco Mendes
 */
class Categoria
{
    private $id_categoria;
    private $nome;
    private $descricao;

    public function __construct($n, $d)
    {
        $this->nome = $n;
        $this->descricao = $d;
    }

    //Métodos set
    public function setIdCategoria($id_c) {
        $this->id_categoria = $id_c;
    }

    public function setNome($n) {
        $this->nome = $n;
    }

    public function setDescricao($d) {
        $this->descricao = $d;
    }

    // Métodos get
    public function getIdCategoria() {
        return $this->id_categoria;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getDescricao() {
        return $this->descricao;
    }
}
