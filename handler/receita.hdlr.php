<?php
include_once '../conn/Connect.conn.php';
include_once '../dao/receita.dao.php';
include_once '../classes/Receita.php';

function novaReceita($titulo, $id_categoria, $id_tipo, $receita) {
    $objReceita = new Receita($titulo, $id_categoria, $id_tipo, $receita);

    $conn = new Connection();
    $objReceitaDAO = new ReceitaDAO($conn);
    $objReceitaDAO->adicionarReceita($objReceita);


    $conn->desconectaDB();
}

function receitaSelecionada($id_receita) {
include 'conn/Connect.conn.php'; // GAMBIARRA DAS BRABA
include 'dao/receita.dao.php'; // GAMBIARRA DAS BRABA
include 'classes/Receita.php'; // GAMBIARRA DAS BRABA
    $conn = new Connection();
    $objReceitaDAO = new ReceitaDAO($conn);

    $result = $objReceitaDAO->slecionarReceita($id_receita);

    return $result;
}

$receitaHandler = $_POST['pageHandler'];

switch ($receitaHandler) {
    case 'receita':
//        echo 'RECEITA<br>';
        $titulo = pg_escape_string($_POST['titulo']);
        $id_categoria = (integer) pg_escape_string(utf8_encode($_POST['categoria']));
        $id_tipo = (integer) pg_escape_string(utf8_encode($_POST['tipo']));
        $receita = pg_escape_string($_POST['rawtext']);

//        echo $titulo . '<br>';
//        echo $id_categoria . '<br>';
//        echo $id_tipo . '<br>';
//        echo $receita . '<br>';
//        exit;
        novaReceita($titulo, $id_categoria, $id_tipo, $receita);
        header('location: ../index.php?page=home&msg=receita');
       break;

    default:

        break;
}
