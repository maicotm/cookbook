<?php

/**
 * Class UsuarioDAO
 * @author Maico Tedesco Mendes
 */
class UsuarioDAO
{
    private $db;


    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    public function novoUsuario(Usuario $usuario) {
        $n = $usuario->getNome();
        $e = $usuario->getEmail();
        $u = $usuario->getUsuario();
        $s = $usuario->getSenha();

        $vet = array($n, $e, $u, $s);
        $sql = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES ($1, $2, $3, $4);";
        $conn = $this->db->conectaDB();

        $result = pg_query_params($conn, $sql, $vet)
            or die("ERRO:<br><hr><li>Falha ao inserir novo usuario!!!</li><hr> ") . pg_result_error($this->db->conectaDB());

        $this->db->conectaDB();
    }

    public function slecionarUsuarioPorID($id_u) {
        $sql = "SELECT * FROM usuarios WHERE id_usuario = ".$id_u.";";
        $conn = $this->db->conectaDB();
        $result = pg_query($conn, $sql);

        if ($result) {
            $result = pg_fetch_array($result);
            //$this->db->desconectaDB();

            return $result;
        }
    }

    public function slecionarUsuarioPorUsuario($usuario) {
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario';";
        $conn = $this->db->conectaDB();
        $result = pg_query($conn, $sql);

        if ($result) {
            $result = pg_fetch_array($result);
            //$this->db->desconectaDB();

            return $result;
        }
    }

    public function deletarUsuario($id_u) {

    }

    public function checaUsuario($u) {
        $sql = "SELECT EXISTS (SELECT true FROM usuarios WHERE usuario = '$u');";
        $conn = $this->db->conectaDB();
        $result = pg_query($conn, $sql)
            or die("ERRO:<br><hr><li>Falha ao checar usuario!!!</li><hr> ") . pg_result_error($result);

        $res = pg_fetch_assoc($result);
        //$this->db->desconectaDB();
        return $res['exists'];

    }

    public function checaUsuarioSenha($u, $s) {
        $conn = $this->db->conectaDB();
        $sql = "SELECT EXISTS (SELECT true FROM usuarios WHERE usuario = '$u' AND senha = '$s');";
        $result = pg_query($conn, $sql)
            or die("ERRO:<br><hr><li>Falha ao checar usuario!!!</li><hr> ") . pg_result_error($result);

        $res = pg_fetch_assoc($result);
        $this->db->desconectaDB();
        return $res['exists'];
    }
}
