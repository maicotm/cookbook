     <h2>Registrar</h2>
       <form class="form-group" action="handler/usuario.hdlr.php" method="POST">
          <label for="nome">Nome Completo</label>
          <input type="text" id="nome" name="nome" placeholder="Nome Completo..." required>

          <label for="email">E-Mail</label>
          <input type="email" id="email" name="email" placeholder="E-Mail..." required>

          <label for="usuario">Usuário</label>
          <input type="text" id="usuario" name="usuario" placeholder="Usuário..." required>

          <label for="senha">Senha</label>
          <input type="password" id="senha" name="senha" placeholder="Senha..." required>

          <label for="repetirSenha">Repetir Senha</label>
          <input type="password" id="repetirSenha" name="repetirSenha" placeholder="Repetir Senha..." required>

          <input type="hidden" id="pageHandler" name="pageHandler" value="registrar">
          <input type="submit" value="Submit">
        </form>
