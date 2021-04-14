     <h2>Registrar</h2>
       <form class="form-group" action="handler/receita.hdlr.php" method="POST">
          <label for="titulo">Titulo</label>
          <input type="text" id="titulo" name="titulo" placeholder="Titulo..." required>


          <label for="tipo">Tipo</label>
          <select name="tipo" id="tipo" required>
            <option selected>Selecione o tipo</option>
<?php
require_once('handler/tipo.hdlr.php');

$result = listarTipos();

while ($lista = pg_fetch_array($result)) {
//     echo $lista['nome']. '<br>';
     echo '<option value="'.$lista['id_tipo'].'">'.$lista['tipo'].'</option>';
}
?>
          </select>
          <label for="categoria">Categoria</label>
          <select name="categoria" id="categoria" required>
            <option selected>Selecione a Categoria</option>
<?php
require_once('handler/categoria.hdlr.php');

$result = listarCategorias();

while ($lista = pg_fetch_array($result)) {
//     echo $lista['nome']. '<br>';
     echo '<option value="'.$lista['id_categoria'].'">'.$lista['nome'].'</option>';
}
?>
          </select>

<div ng-app="textAngularTest" ng-controller="wysiwygeditor" class="container app">
  <h3>Receita</h3>
  <button ng-click="disabled = !disabled" unselectable>Disable text-angular Toggle</button>
  <div text-angular="text-angular" name="htmlcontent" ng-model="htmlcontent" ta-disabled='disabled'></div>
  <h3>Raw HTML in a text area</h3>
  <textarea ng-model="htmlcontent" name="rawtext" style="width: 100%"></textarea>
</div>
  <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js'></script>
  <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular-sanitize.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.1.2/textAngular.min.js'></script>

  <script  src="js/script.js"></script>

</body>
</html>

          <input type="hidden" id="pageHandler" name="pageHandler" value="receita">
          <input type="submit" value="Submit">
        </form>
