<?php

include 'conexao.php';

class livrodao{
    /*CRUD - create read update delete*/

    /*C create */
    public function cadastrar(Livro $liv){
        $sql = "insert into Livro (nome, autor, editora, edicao, ano, pags, idioma) values (?, ?, ?, ?, ?, ?, ?)";

        $bc = new Conexao();
        $con = $bc->getConexao();

        $valores = $con->prepare($sql);
        $valores->bindValue(1, $liv->GetNome());
        $valores->bindValue(2, $liv->GetAutor());
        $valores->bindValue(3, $liv->GetEditora());
        $valores->bindValue(4, $liv->GetEdicao());
        $valores->bindValue(5, $liv->GetAnoPub());
        $valores->bindValue(6, $liv->GetPags());
        $valores->bindValue(7, $liv->GetIdioma());

        $result = $valores->execute();

        if($result){
            header('Location: funcoes.php?cadastrado=true');
        }else{
            echo "Erro ao cadastrar";
        }
    }

    public function consultar(){
        $sql = "select * from Livro";

        $bc = new Conexao();
        $con = $bc->getConexao();

        $valores = $con->prepare($sql);
        $valores->execute();

        if($valores->rowCount()>0){
            $resultado = $valores->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }

    public function atualizar(Livro $liv){
        $sql = 'update Livro set nome=?, autor=?, editora=?, edicao=?, ano=?, pags=?, idioma=? where cod_livro=?';

        $bc = new Conexao();
        $con = $bc->getConexao();

        $valores = $con->prepare($sql);
        $valores->bindValue(1, $liv->GetNome());
        $valores->bindValue(2, $liv->GetAutor());
        $valores->bindValue(3, $liv->GetEditora());
        $valores->bindValue(4, $liv->GetEdicao());
        $valores->bindValue(5, $liv->GetAnoPub());
        $valores->bindValue(6, $liv->GetPags());
        $valores->bindValue(7, $liv->GetIdioma());
        $valores->bindValue(8, $liv->GetCodigo());

        $valores->execute();

        if($valores->rowCount()>0){
            header('Location: funcoes.php?atualizado=true');
        }else{
            $c = $liv->GetCodigo();
            header("Location: funcoes.php?error-att=true&c=".urlencode($c));
        }
    }

    public function deletar(Livro $liv){
        $sql = "delete from Livro where cod_livro=?;";
        $select = "select * from Livro where cod_livro=?;";

        $bc = new Conexao();
        $con = $bc->getConexao();
        
        $values = $con->prepare($select);
        $values->bindValue(1, $liv->GetCodigo());

        $values->execute();

        $valores = $con->prepare($sql);
        $valores->bindValue(1, $liv->GetCodigo());

        $valores->execute();

        if($valores->rowCount()>0){
            $resultado = $values->fetchAll(\PDO::FETCH_ASSOC);
            foreach ($resultado as $book) {
                $nome = $book['nome'];
                $codigo = $book['cod_livro'];
            }
            header("Location: funcoes.php?deletado=true&n=".urlencode($nome)."&c=".urlencode($codigo));
        }else if($liv->GetCodigo()){
            $c = $liv->GetCodigo();
            header("Location: funcoes.php?error-del=true&c=".urlencode($c));
        }
    }

    public function addEstoque(Livro $liv){
        $sql = "update Livro set estoque=? where cod_livro=?";

        $bc = new Conexao();
        $con = $bc->getConexao();

        $valores = $con->prepare($sql);
        $valores->bindValue(1, $liv->GetQtd());
        $valores->bindValue(2, $liv->GetCodigo());
        
        $valores->execute();

        if($valores->rowCount()>0){
            header('Location: funcoes.php?EADD=true');
        }else{
            header('Location: funcoes.php?ERROREADD=true');
        }
    }
}