<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/icone.ico" type="image/x-icon" />    
    <link rel="stylesheet" href="estilos/cadastroLogin.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGLib - Cadastro</title>
</head>
<body>
<?php 
/**
 * ERROS
 */
if(isset($_GET['EE'])){
    echo '
        <div class="alert">
            <p>Erro ao cadastrar! Esse email já existe no nosso sistema.</p>
        </div>
    ';
}else if(isset($_GET['UE'])){
    echo '
        <div class="alert">
            <p>Erro ao cadastrar! Esse nome de usuário já existe no nosso sistema.</p>
        </div>
    ';
}
?>
    <form class="center" action="usuariocontroller.php" method="post">
        <label class="required">Email:</label><br>
        <input class="textbox" type="email" name="email" required minlength="3" placeholder="Email" maxlength="60"><br>
        <label class="required">Nome de Usuário:</label><br>
        <input class="textbox" type="text" name="nome_user" required minlength="3" placeholder="Username" maxlength="60"><br>
        <label>Celular:</label><br>
        <input class="textbox" type="tel" name="tel" pattern="[0-9]{2} [0-9]{2} [0-9]{5}-[0-9]{4}" minlength="3" placeholder="ex:11 55 91234-5678" maxlength="16"><br>
        <label class="required">Senha:</label><br>
        <input class="textbox" type="password" name="senha" required minlength="3" placeholder="Senha" maxlength="30"><br>
        <label class="required">Confirmar senha:</label><br>
        <input class="textbox" type="password" name="pass" required minlength="3" placeholder="Senha" maxlength="30"><br><br>
        <input class="button" type="submit" name="acao" value="CADASTRAR"><br><br>
        <img src="img/LOGODOPAI.svg" alt="LOGO"><br>
    </form>
</body>
</html>