<div class="sobrepoe-tudo">
<div class="box">
        <form action="usuariocontroller.php" method="post">
            <label class="white">Adicionar telefone:</label><br>
            <input class="textbox" type="tel" name="tel" required pattern="[0-9]{2} [0-9]{2} [0-9]{5}-[0-9]{4}" minlength="3" placeholder="ex:11 55 91234-5678" maxlength="16"><br>
            <input class="button" type="submit" name="acao" value="Alterar Celular"><br>
            <img src="img/LOGODOPAI.svg" alt="LOGO" width="200px"><br>
        </form>
        <form class="mg0" action="usuariocontroller.php" method="post">
            <input class="mei bb white bc pointer" type="submit" name="acao" value="Fechar"><br>
        </form>
    </div>
</div>