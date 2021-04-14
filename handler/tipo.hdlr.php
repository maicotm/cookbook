<?php

include_once 'conn/Connect.conn.php';
include_once 'dao/tipo.dao.php';
include_once 'classes/Tipo.php';

function listarTipos() {
    $conn = new Connection();
    $objTipoDAO = new TipoDAO($conn);

    $result = $objTipoDAO->slecionarTipos();
    //$conn->desconecta();

    return $result;
}
