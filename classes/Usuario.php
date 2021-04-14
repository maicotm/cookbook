<?php

/**
 * Class Usuario
 * @author Maico Tedesco Mendes
 */
class Usuario
{
    private $id_usuario;
    private $nome;
    private $email;
    private $usuario;
    private $senha;

    public function __construct($n, $e, $u, $s) {
        $this->nome = $n;
        $this->email = $e;
        $this->usuario = $u;
        $this->senha = $s;
    }

    //Metodos set
    public function setIdUsuario($id_u) {
        $this->id_usuario = $id_u;
    }

    public function setNome($n) {
        $this->nome = $n;
    }

    public function seEmail($e) {
        $this->email = $e;
    }
    public function setUsuario($u) {
        $this->usuario = $u;
    }
    public function setSenha($s) {
        $this->senha = $s;
    }

    // Metodos get
    public function getIdUsuario() {
        return $this->id_usuario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

}
