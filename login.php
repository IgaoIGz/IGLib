<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/icone.ico" type="image/x-icon" />    
    <link rel="stylesheet" href="estilos/cadastroLogin.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGLib - Login</title>
</head>
<body>
    <div class="erro">
        <?php
            if(isset($_GET['erro'])){
                echo "<p>É necessário logar para acessar o conteúdo</p>";
            }
        ?>
    </div>
    <form class="center" action="usuariocontroller.php" method="post">
        <label>Nome de Usuário:</label><br>
        <input class="textbox" type="text" name="nome_user" required minlength="3" placeholder="Username" maxlength="60"><br>
        <label>Senha:</label><br>
        <input class="textbox" type="password" name="senha" required minlength="3" placeholder="Senha" maxlength="30"><br><br>
        <input class="button" type="submit" name="acao" value="LOGIN"><br><br>
        <img src="img/LOGODOPAI.svg" alt="LOGO"><br>
    </form>
</body>
</html>