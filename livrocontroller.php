<?php

include 'Livro.php';
include 'livrodao.php';

$cod_livro = filter_input(INPUT_POST, 'cod_livro');
$nome_livro = filter_input(INPUT_POST, 'nome_livro');
$autor = filter_input(INPUT_POST, 'autor');
$editora = filter_input(INPUT_POST, 'editora');
$edicao = filter_input(INPUT_POST, 'edicao');
$ano_pub = filter_input(INPUT_POST, 'ano_pub');
$pags = filter_input(INPUT_POST, 'pags');
$idioma = filter_input(INPUT_POST, 'idioma');
$qtd = filter_input(INPUT_POST, 'qtd');
$acao = filter_input(INPUT_POST, 'acao');

$livro = new Livro();
$livrodao = new livrodao();

$livro->setCodigo($cod_livro);
$livro->SetNome($nome_livro);
$livro->SetAutor($autor);
$livro->SetEditora($editora);
$livro->SetEdicao($edicao);
$livro->SetAnoPub($ano_pub);
$livro->SetPags($pags);
$livro->SetIdioma($idioma);
$livro->SetQtd($qtd);

if ($acao=="CADASTRAR LIVRO") {
    $livrodao->cadastrar($livro);
}else if($acao=="ATUALIZAR LIVRO"){
    $livrodao->atualizar($livro);
}else if ($acao=="DELETAR LIVRO") {
    $livrodao->deletar($livro);
}else if ($acao=="ALTERAR QUANTIDADE"){
    $livrodao->addEstoque($livro);
}