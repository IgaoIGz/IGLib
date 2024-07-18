<div class="sobrepoe-tudo">
    <div class="box">
        <form action="usuariocontroller.php" method="post">
            <label class="white">Senha atual:</label><br>
            <input class="textbox" type="password" name="pass" required minlength="3" placeholder="Senha atual" maxlength="60"><br>
            <label class="white">Senha nova:</label><br>
            <input class="textbox" type="password" name="senha" required minlength="3" placeholder="Senha nova" maxlength="60"><br>
            <input class="button" type="submit" name="acao" value="Alterar Senha"><br>

            <img src="img/LOGODOPAI.svg" alt="LOGO" width="200px"><br>
        </form>
        <form class="mg0" action="usuariocontroller.php" method="post">
            <input class="mei bb white bc pointer" type="submit" name="acao" value="Fechar"><br>
        </form>
    </div>
</div>