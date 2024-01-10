<?php

class Livro{
    private $cod_livro;
    private $nome_livro;
    private $autor_livro;
    private $editora;
    private $edicao;
    private $ano_pub;
    private $pags;
    private $idioma;
    private $qtd;

    public function GetCodigo(){
        return $this->cod_livro;
    }
    public function SetCodigo($cod_livro){
        $this->cod_livro = $cod_livro;
    }

    public function GetNome(){
        return $this->nome_livro;
    }
    public function SetNome($nome_livro){
        $this->nome_livro = $nome_livro;
    }

    public function GetAutor(){
        return $this->autor_livro;
    }
    public function SetAutor($autor){
        $this->autor_livro = $autor;
    }

    public function GetEditora(){
        return $this->editora;
    }
    public function SetEditora($editora){
        $this->editora = $editora;
    }

    public function GetEdicao(){
        return $this->edicao;
    }
    public function SetEdicao($edicao){
        $this->edicao = $edicao;
    }

    public function GetAnoPub(){
        return $this->ano_pub;
    }
    public function SetAnoPub($ano_pub){
        $this->ano_pub = $ano_pub;
    }

    public function GetPags(){
        return $this->pags;
    }
    public function SetPags($pags){
        $this->pags = $pags;
    }

    public function GetIdioma(){
        return $this->idioma;
    }
    public function SetIdioma($idioma){
        $this->idioma = $idioma;
    }

    public function GetQtd(){
        return $this->qtd;
    }
    public function SetQtd($qtd){
        $this->qtd = $qtd;
    }
}
