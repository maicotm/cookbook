<?php

include_once 'conn/Connect.conn.php';
include_once 'dao/categoria.dao.php';
include_once 'classes/Categoria.php';

function listarCategorias() {
    $conn = new Connection();
    $objCategoriaDAO = new CategoriaDAO($conn);

    $result = $objCategoriaDAO->slecionarCategorias();
    //$conn->desconecta();

    return $result;
}
