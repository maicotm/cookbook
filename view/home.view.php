     <h1>Ultimas receitas</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"><h3>Receitas</h3</th>
    </tr>
  </thead>
  <tbody>
<?php
require_once('handler/home.hdlr.php');

$result = listarHome();

while ($lista = pg_fetch_array($result)) {

    echo '<tr>';
    echo ' <td scope="row"><a href="index.php?page=receita&msg=selecionada&id='.$lista['id_receita'].'">'.$lista['titulo'].'</a></td>';
    echo '</tr>';
}
?>
      </tbody>
</table>
