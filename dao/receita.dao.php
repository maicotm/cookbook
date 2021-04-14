<?php

/**
 * Class UsuarioDAO
 * @author Maico Tedesco Mendes
 */
class ReceitaDAO
{
    private $db;


    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    public function adicionarReceita(Receita $receita) {
        $t = $receita->getTitulo();
        $id_c = (integer) $receita->getIdCategoria();
        $id_t = (integer) $receita->getIdTipo();
        $r = $receita->getReceita();

//        echo 'DAOOOOOOOO <br>';
//        echo $t . '<br>';
//        echo $id_c . '<br>';
//        echo $id_t . '<br>';
//        echo $r . '<br>';
//        exit;
//        $vet = array($t, $id_c, $id_t, $r);
//        var_dump($vet);
//        exit;
        $sql = "INSERT INTO receitas (titulo, id_categoria, id_tipo, receita) VALUES ('$t', ".$id_c.", ".$id_t.", '$r');";
//        $sql = "INSERT INTO receitas (titulo, id_categoria, id_tipo, receita) VALUES ($1, $2, $3, $4);";
        $conn = $this->db->conectaDB();

//        $result = pg_query_params($conn, $sql, $vet)
        $result = pg_query($conn, $sql)
            or die("ERRO:<br><hr><li>Falha ao inserir nova receita!!!</li><hr> ") . pg_result_error($this->db);

        if($result) {
            header('location: ../index.php?page=home&msg=receita');
        }
    }

    public function slecionarReceita($id_r) {
        $sql = "SELECT * FROM receitas WHERE id_receita = ".$id_r.";";
        $conn = $this->db->conectaDB();
        $result = pg_query($conn, $sql)
            or die("ERRO:<br><hr><li>Falha ao inserir nova receita!!!</li><hr> ");

        if ($result) {
            $result = pg_fetch_assoc($result);
            //$this->db->desconectaDB();

            return $result;
        }
    }
}
