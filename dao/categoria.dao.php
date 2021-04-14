<?php

/**
 * Class UsuarioDAO
 * @author Maico Tedesco Mendes
 */
class CategoriaDAO
{
    private $db;


    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    public function novaCategoria(Categoria $categoria) {
        $n = $categoria->getNome();
        $d = $categoria->getDescricao();

        $vet = array($n, $d);
        $sql = "INSERT INTO categoria (nome, descricao) VALUES ($1, $2);";
        $conn = $this->db->conectaDB();

        $result = pg_query_params($conn, $sql, $vet)
            or die("ERRO:<br><hr><li>Falha ao inserir nova categoria!!!</li><hr> ") . pg_result_error($this->db->conectaDB());

        $this->db->conectaDB();
    }

    public function slecionarCategorias() {
        $sql = "SELECT id_categoria, nome FROM categoria ORDER BY nome ASC;";
        $conn = $this->db->conectaDB();
        $result = pg_query($conn, $sql)
            or die("ERRO:<br><hr><li>Falha ao inserir nova categoria!!!</li><hr> ") . pg_result_error($this->db->conectaDB());

        if ($result) {
            //$result = pg_fetch_assoc($result);
            //$this->db->desconectaDB();

            return $result;
        } else {
            echo 'TEM ALGO ERRADO, MAS OQ PQP!!!!!!!!!!!';
        }
    }
}
