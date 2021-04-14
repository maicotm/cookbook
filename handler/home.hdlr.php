<?php

include_once 'conn/Connect.conn.php';
include_once 'dao/home.dao.php';

function listarHome() {
    $conn = new Connection();
    $objHomeDAO = new HomeDAO($conn);

    $result = $objHomeDAO->slecionarHome();
    //$conn->desconecta();

    return $result;
}
