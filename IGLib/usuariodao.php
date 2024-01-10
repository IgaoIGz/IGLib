<?php

include 'conexao.php';

class usuariodao{
    public function cadastrar(Usuario $user){
        session_start();
        $sql = "insert into Usuario (email_usuario, nome_usuario, senha_usuario, tel_usuario) values (?, ?, ?, ?)";
        $select = "select * from Usuario where email_usuario=? or nome_usuario=?";

        $bc = new Conexao();
        $con = $bc->getConexao();

        $valores = $con->prepare($sql);
        $valores->bindValue(1, $user->GetEmail());
        $valores->bindValue(2, $user->GetUsuario());
        $valores->bindValue(3, $user->GetSenha());
        $valores->bindValue(4, $user->GetTel());

        try {
            $result = $valores->execute();
        } catch (PDOException $e) {
            $values = $con->prepare($select);
            $values->bindValue(1, $user->GetEmail());
            $values->bindValue(2, $user->GetUsuario());
            $values->execute();
            if($values->rowCount()>0){
                $resultado = $values->fetchAll(\PDO::FETCH_ASSOC);
                foreach ($resultado as $usertest){
                    $email = $usertest['email_usuario'];
                    $nome = $usertest['nome_usuario'];
                    if($email == $user->GetEmail()){
                        header('Location: cadastro.php?EE=true');
                    }else if($nome == $user->GetUsuario()){
                        header('Location: cadastro.php?UE=true');
                    }
                }
            }
        }

        if($result){
            $_SESSION['usuario'] = $user->GetUsuario();
            $_SESSION['senha'] = $user->GetSenha();
            $_SESSION['email'] = $user->GetEmail();
            $_SESSION['tel'] = $user->GetTel();
            header('location: principal.php');
        }else{
            echo "Erro ao cadastrar";
        }
    }

    public function login(Usuario $user){
        $sql = "select * from Usuario where nome_usuario = ? and senha_usuario = ?";

        $bc = new Conexao();
        $con = $bc->getConexao();

        $valores = $con->prepare($sql);
        $valores->bindValue(1, $user->GetUsuario());
        $valores->bindValue(2, $user->GetSenha());

        $valores->execute();

        if($valores->rowCount()>0){
            $resultado = $valores->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }

    public function AlterarUser(Usuario $user){
        session_start();
        $sql = "update Usuario set nome_usuario=? where nome_usuario=?";

        $bc = new Conexao();
        $con = $bc->getConexao();

        $valores = $con->prepare($sql);
        $valores->bindValue(1, $user->GetUsuario());
        $valores->bindValue(2, $_SESSION['usuario']);

        try {
            $result = $valores->execute();
        } catch (PDOException $e) {
            header('Location: conta.php?error-exist=true');
        }

        if($result){
            $_SESSION['usuario'] = $user->GetUsuario();
            header('location: principal.php');
        }else{
            echo "Erro ao cadastrar";
        }
    }

    public function AlterarEmail(Usuario $user){
        session_start();
        $sql = "update Usuario set email_usuario=? where nome_usuario=?";
        $select = "select email_usuario from Usuario where email_usuario=?";

        $bc = new Conexao();
        $con = $bc->getConexao();

        $valores = $con->prepare($sql);
        $valores->bindValue(1, $user->GetEmail());
        $valores->bindValue(2, $_SESSION['usuario']);

        try {
            $result = $valores->execute();
        } catch (PDOException $e) {
            $value = $con->prepare($select);
            $value->bindValue(1, $user->GetEmail());
            $value->execute();

            if($value->rowCount()>0){
                $resultado = $value->fetchAll(\PDO::FETCH_ASSOC);
                foreach($resultado as $testemail){
                    $email = $testemail['email_usuario'];
                    if($email == $user->GetEmail()){
                        header('Location: conta.php?EE=true');
                    }
                }
            }
        }

        if($result){
            $_SESSION['email'] = $user->GetEmail();
            header('location: conta.php?ENE=true');
        }else{
            echo "Erro ao atualizar";
        }
    }

    public function AlterarTel(Usuario $user){
        session_start();
        $sql = "update Usuario set tel_usuario=? where nome_usuario=?";

        $bc = new Conexao();
        $con = $bc->getConexao();

        $valores = $con->prepare($sql);
        $valores->bindValue(1, $user->GetTel());
        $valores->bindValue(2, $_SESSION['usuario']);

        try {
            $result = $valores->execute();
        } catch (PDOException $e) {
            echo "Ocorreu um erro ao atualizar o número de celular."."<br>" . $e->getMessage();
        }

        if($result){
            $_SESSION['tel'] = $user->GetTel();
            header('location: principal.php');
        }else{
            echo "Erro ao atualizar";
        }
    }

    public function AlterarSenha(Usuario $user){
        session_start();
        $sql = "update Usuario set senha_usuario=? where senha_usuario=? and nome_usuario=?";

        $bc = new Conexao();
        $con = $bc->getConexao();

        $valores = $con->prepare($sql);
        $valores->bindValue(1, $user->GetSenha());
        $valores->bindValue(2, $user->GetPass());
        $valores->bindValue(3, $_SESSION['usuario']);

        try {
            $valores->execute();
        } catch (PDOException $e) {
            echo "Ocorreu um erro ao atualizar a senha."."<br>" . $e->getMessage();
        }

        if($valores->rowCount()>0){
            header('location: conta.php?SA=true');
        }else{
            header('Location: conta.php?Errat=true');
        }
    }
}