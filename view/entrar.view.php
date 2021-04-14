     <h2>Entrar</h2>
       <form class="form-group" action="handler/usuario.hdlr.php" method="POST">
          <label for="usuario">Usuário</label>
          <input type="text" id="usuario" name="usuario" placeholder="Usuário..." required>

          <label for="repetirsenha">Senha</label>
          <input type="password" id="" name="senha" placeholder="Senha..." required>

          <input type="hidden" id="pageHandler" name="pageHandler" value="entrar">
          <input type="submit" value="Entrar">
        </form>
