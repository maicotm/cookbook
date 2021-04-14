     <h2>RECEITA</h2>
<?php
require_once('handler/receita.hdlr.php');
$id = $_GET['id'];
$result = receitaSelecionada($id);

echo '<h2>'.$result['titulo'].'</h2>';
echo $result['receita'];
?>
