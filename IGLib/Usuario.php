<?php

class Usuario{
    private $cod_usuario;
    private $usuario;
    private $senha;
    private $pass;
    private $email;
    private $tel;

    public function GetCodigo(){
        return $this->cod_usuario;
    }
    public function SetCodigo($cod_usuario){
        $this->cod_usuario = $cod_usuario;
    }

    public function GetUsuario(){
        return $this->usuario;
    }
    public function SetUsuario($nome_user){
        $this->usuario = $nome_user;
    }

    public function GetSenha(){
        return $this->senha;
    }
    public function SetSenha($senha){
        $this->senha = $senha;
    }

    public function GetPass(){
        return $this->pass;
    }
    public function SetPass($pass){
        $this->pass = $pass;
    }

    public function GetEmail(){
        return $this->email;
    }
    public function SetEmail($email){
        $this->email = $email;
    }

    public function GetTel(){
        return $this->tel;
    }
    public function SetTel($tel){
        $this->tel = $tel;
    }
}