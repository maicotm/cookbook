<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css'>
    <title>CoockBook</title>

 </head>
   <body>

   <header>
     <nav>
       <ul class="topnav">
         <li><a class="active" href="index.php?page=home">CoockBook</a></li>
<?php
session_start();
$id_usuario = $_SESSION['logado'];
$nome = $_SESSION['nome'];
//        exit;
//if (isset($_SESSION['logado'])) {
    if ($_SESSION['logado'] === 'sim') {

?>
        <div class="right">
          <li class="right dropdown">
           <button class="dropbtn"><?php echo $_SESSION['nome']; ?></button>
             <div class="dropdown-content">
               <a href="index.php?page=home&msg=sair">SAIR</a>
               <a href="#">Link 2</a>
               <a href="#">Link 3</a>
             </div>
          </li>
          <li class="right"><a href="index.php?page=receita&msg=novaReceita">NOVA RECEITA</a></li>
          <li class="right"><a href="index.php?page=categorias">CATEGORIAS</a></li>
          <li class="right"><a href="index.php?page=home">HOME</a></li>
        </div>
<?php

    } else {
?>
       <li class="right"><a href="index.php?page=entrar">ENTRAR</a></li>
         <li class="right"><a href="index.php?page=registrar">REGISTRAR</a></li>
         <li class="right"><a href="index.php?page=categorias">CATEGORIAS</a></li>
         <li class="right"><a href="index.php?page=home">HOME</a></li>
<?php
    }
//}
?>
       </ul>
     </nav>
   </header>

   <div class="left-sidebar"></div>
   <main class="center-grid">
