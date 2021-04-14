<?php

/**
 * Class UsuarioDAO
 * @author Maico Tedesco Mendes
 */
class HomeDAO
{
    private $db;


    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    public function slecionarHome() {
        $sql = "SELECT id_receita, titulo FROM receitas ORDER BY titulo  ASC;";
        $conn = $this->db->conectaDB();
        $result = pg_query($conn, $sql)
            or die("ERRO:<br><hr><li>Falha ao inserir nova home!!!</li><hr> ") . pg_result_error($this->db->conectaDB());

        if ($result) {
            return $result;
        } else {
            echo 'TEM ALGO ERRADO, MAS OQ PQP!!!!!!!!!!!';
        }
    }
}
