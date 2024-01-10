
<?php 
session_start();

if (!isset($_SESSION['usuario']) && !isset($_SESSION['senha'])) {
    header('Location: login.php?erro=true');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="img/icone.ico" type="image/x-icon" />
    <link rel="stylesheet" href="estilos/acc.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGLib - Conta</title>
</head>
<body>
<?php 
if($acao == "Alterar Usuário"){
    include 'content/alterFormUsu.php';
}else if($acao == "Alterar Email"){
    include 'content/alterFormEmail.php';
}else if($acao == "Alterar Celular"){
    include 'content/alterFormTel.php';
}else if($acao == "Alterar Senha"){
    include 'content/alterFormSenha.php';
}

/**
 * SUCESSO
 */

if(isset($_GET['SA'])){
    echo '
        <div class="alert">
            <p>Senha alterada com sucesso!</p>
        </div>
    ';
}else if(isset($_GET['ENE'])){
    echo '
        <div class="alert">
            <p>Email alterado com sucesso!</p>
        </div>
    ';
}

/**
 * ERROS
 */
/** SE EXISTIR NO BANCO O USUÁRIO X, INCLUIR */
if(isset($_GET['error-exist'])){
    include 'errorpages/error-exist.php';
}else if(isset($_GET['Errat'])){
    echo '
        <div class="alert">
            <p>Não foi possível alterar a senha. A senha atual está incorreta</p>
        </div>
    ';
}else if(isset($_GET['EE'])){
    echo '
        <div class="alert">
            <p>Não foi possível alterar o email. O email já está sendo utilizado em nosso sistema.</p>
        </div>
    ';
}
?>
    <main>
        <a class="position" href="principal.php">
            <img src="img/LOGODOPAI.svg" alt="logo" width="100px">
        </a>
        <section class="title">
            <h2>Conta - Editar dados pessoais</h2>
        </section>
        <section class="SectionUM">
            <div class="contentform">
                <li class="bc">
                    <form class="nodec i" action="conta.php" method="post">
                        <input class="bold pl white nobg noborder w100 just pointer py centro" name="acao" type="submit" value="Perfil">
                    </form>
                </li>
                <li class="bc">
                    <form class="nodec i" action="conta.php" method="post">
                        <input class="bold pl white nobg noborder w100 just pointer py centro" name="acao" type="submit" value="Segurança e privacidade">
                    </form>
                </li>
                <li class="bc">
                    <form action="conta.php" class="nodec i" method="post">
                        <input class="bold pl white nobg noborder w100 just pointer py centro" name="acao" type="submit" value="Sair">
                    </form>
                </li>
            </div>
            
