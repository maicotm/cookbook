<?php

/**
 * Class UsuarioDAO
 * @author Maico Tedesco Mendes
 */
class TipoDAO
{
    private $db;


    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    public function novoTipo(Tipo $tipo) {
        $t = $tipo->getTipo();

        $vet = array($t);
        $sql = "INSERT INTO tipo (tipo) VALUES ($1);";
        $conn = $this->db->conectaDB();

        $result = pg_query_params($conn, $sql, $vet)
            or die("ERRO:<br><hr><li>Falha ao inserir nova tipo!!!</li><hr> ") . pg_result_error($this->db->conectaDB());

        $this->db->conectaDB();
    }

    public function slecionarTipos() {
        $sql = "SELECT id_tipo, tipo FROM tipo ORDER BY tipo ASC;";
        $conn = $this->db->conectaDB();
        $result = pg_query($conn, $sql)
            or die("ERRO:<br><hr><li>Falha ao inserir nova tipo!!!</li><hr> ") . pg_result_error($this->db->conectaDB());

        if ($result) {
            //$result = pg_fetch_assoc($result);
            //$this->db->desconectaDB();

            return $result;
        } else {
            echo 'TEM ALGO ERRADO, MAS OQ PQP!!!!!!!!!!!';
        }
    }
}
