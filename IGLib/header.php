
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
    <link rel="stylesheet" href="estilos/estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGLib - Gerenciamento de biblioteca</title>
</head>
<body>
    <header>
        <a class="w100" href="principal.php">
            <img src="img/LOGODOPAI.svg" alt="LogoLIB" width="100px">
        </a>
        <div class="ola bold">
            <p>
                <?php echo "Bem-vindo ".$_SESSION['usuario'] ?>
            </p>
        </div>
        <nav class="nav">
            <ul class="ul">
                <li class="item-um">
                    <a href="funcoes.php">
                        Funções
                    </a>
                </li>
                <li class="item-dois">
                    <a href="consulta.php">
                        Consultar Livros
                    </a>
                </li>
                <li class="item-tres">
                    <a href="conta.php">
                        Conta
                    </a>
                </li>
            </ul>
        </nav>
    </header>