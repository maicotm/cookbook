<?php

include '../conn/Connect.conn.php';
include '../dao/usuario.dao.php';
include '../classes/Usuario.php';

//function checaUsuario($conn, $u) {
//        $sql = "SELECT EXISTS (SELECT true FROM usuarios WHERE usuario = '$u');";
//        $result = pg_query($conn, $sql)
//            or die("ERRO:<br><hr><li>Falha ao checar usuario!!!</li><hr> ");
//
//        $res = pg_fetch_assoc($result);
//        return $res['exists'];
//}
//
//function checaUsuarioSenha($conn, $u, $s) {
//        $sql = "SELECT EXISTS (SELECT true FROM usuarios WHERE usuario = '$u' AND senha = '$s');";
//        $result = pg_query($conn, $sql)
//            or die("ERRO:<br><hr><li>Falha ao checar usuario!!!</li><hr> ") . pg_result_error($result);
//
//        $res = pg_fetch_assoc($result);
//        return $res['exists'];
//}

function registrarUsuario($nome, $email, $usuario, $senha) {
    $conn = new Connection();
    $objUsuarioDAO = new UsuarioDAO($conn);

//    if (checaUsuario($conn, $usuario) === 'f') {
    if ($objUsuarioDAO->checaUsuario($usuario) === 'f') {
        $objUsuario = new Usuario($nome, $email, $usuario, $senha);

        $objUsuarioDAO->novoUsuario($objUsuario);

        $conn->desconectaDB();
        header('location: ../index.php?page=registrar&msg=nao');
    } else {
        header('location: ../index.php?page=registrar&msg=sim');
    }
}

function entrarUsuario($u, $s) {
    $conn = new Connection();
    $objUsuarioDAO = new UsuarioDAO($conn);

//    if (checaUsuarioSenha($conn, $u, $s) === 't') {
    if ($objUsuarioDAO->checaUsuarioSenha($u, $s) === 't') {
        $result = $objUsuarioDAO->slecionarUsuarioPorUsuario($u);

        $objUsuario = new Usuario($result['nome'], $result['email'], $result['usuario'], $result['senha']);
        $objUsuario->setIdUsuario($result['id_usuario']);
        //header('location: ../index.php?page=home');
        session_start();
        $_SESSION['logado'] = 'sim';
        $_SESSION['id_usuario'] = $objUsuario->getIdUsuario();
        $_SESSION['nome'] = $objUsuario->getNome();
        unset($objUsuario);
        header('location: ../index.php?page=home&msg=sim');
    } else {
        header('location: ../index.php?page=entrar&msg=nao');
    }
}

//function selecionaUsuario($usuario) {
//    if (checaUsuario($usuario) === 't') {
//        header('location: ../index.php?page=registrar&msg=sim');
//    } else {
//        header('location: ../index.php?page=registrar&msg=nao');
//    }
//}

$userHandler = $_POST['pageHandler'];

switch ($userHandler) {
    case 'registrar':
        $nome = pg_escape_string(utf8_decode($_POST['nome']));
        $usuario = pg_escape_string(utf8_encode($_POST['usuario']));
        $email = pg_escape_string(utf8_encode($_POST['email']));
        $senha = pg_escape_string(md5($_POST['senha']));
        $repetirSenha = pg_escape_string(md5($_POST['repetirSenha']));

        if ($senha === $repetirSenha) {
            registrarUsuario($nome, $email, $usuario, $senha);
        } else {
            header('location: ../index.php?page=registrar&msg=senha');
        }
       break;
    case 'entrar':
        $usuario = pg_escape_string(utf8_encode($_POST['usuario']));
        $senha = pg_escape_string(md5($_POST['senha']));

        entrarUsuario($usuario, $senha);
        break;

    default:

        break;
}
