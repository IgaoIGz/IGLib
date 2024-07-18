<?php

$acao = filter_input(INPUT_POST, 'acao');


include 'acc.php';


if($acao == "Perfil"){
    include 'content/contentP.php';
}else if($acao == "Segurança e privacidade"){
    include 'content/contentSP.php';
}else if($acao == "Contato"){
    include 'content/contentC.php';
}else if($acao == "Sair"){
    session_destroy();
    header('Location: index.php');
}else{
    include 'content/contentpadrao.php';
}




include 'fc.php';
?>