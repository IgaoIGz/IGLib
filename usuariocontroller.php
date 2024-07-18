<?php

session_start();

include 'Usuario.php';
include 'usuariodao.php';

$nome_user = filter_input(INPUT_POST, 'nome_user');
$senha = filter_input(INPUT_POST, 'senha');
$pass = filter_input(INPUT_POST, 'pass');
$email = filter_input(INPUT_POST, 'email');
$tel = filter_input(INPUT_POST, 'tel');
$acao = filter_input(INPUT_POST, 'acao');

$usuario = new Usuario();
$usuariodao = new usuariodao();

$usuario->setUsuario($nome_user);
$usuario->setSenha($senha);
$usuario->SetPass($pass);
$usuario->setEmail($email);
$usuario->setTel($tel);

if ($acao=="CADASTRAR" && $senha == $pass) {
    $usuariodao->cadastrar($usuario);
}else if ($acao =="LOGIN") {
    $usuariodao->login($usuario);
    $simplify = $usuariodao->login($usuario);
    if (isset($simplify) && (is_array($simplify) || is_object($simplify))){
        foreach($simplify as $login){
            if($nome_user == $login['nome_usuario'] && $senha == $login['senha_usuario']){
                $_SESSION['usuario'] = $nome_user;
                $_SESSION['senha'] = $senha;
                $_SESSION['email'] = $login['email_usuario'];
                $_SESSION['tel'] = $login['tel_usuario'];
                header('location: principal.php');
            }
        }
    }else{
        $teste = "login";
        include 'errorpages/erropass.php';
        include 'login.php';
    }
}else if ($acao=="CADASTRAR" && $senha != $pass){
    $teste = "cadastro";
    include 'errorpages/erropass.php';
    include 'cadastro.php';
}else if ($acao == "Alterar Usuário"){
    $usuariodao->AlterarUser($usuario);
}else if ($acao == "Alterar Email"){
    $usuariodao->AlterarEmail($usuario);
}else if ($acao == "Alterar Celular"){
    $usuariodao->AlterarTel($usuario);
}else if($acao == "Fechar"){
    header('Location: conta.php');
}else if($acao == "Alterar Senha"){
    $usuariodao->AlterarSenha($usuario);
}else if($acao == "Voltar"){
    header('Location: principal.php');
}
?>