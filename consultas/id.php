
<?php 
include 'livrocontroller.php';

if($acao=="CONSULTA POR CÓDIGO"){
    $codig = filter_input(INPUT_POST, 'codig');
    $livrodao->consultar();
    if($livrodao->consultar() == true){
        foreach($livrodao->consultar() as $consult){
            if($codig == $consult['cod_livro']){
                $cod_book =  $consult['cod_livro'];
                $nome_book = $consult['nome'];
                $autor_book = $consult['autor'];
                $editora_book = $consult['editora'];
                $edicao_book = $consult['edicao'];
                $ano_book = $consult['ano'];
                $pags_book = $consult['pags'];
                $idioma_book = $consult['idioma'];
                $estoque_book = $consult['estoque'];
                echo '<div class="livro">';
                echo "Livro: ".$nome_book."<br>";
                echo "Código do livro: ".$cod_book."<br>";
                echo "Autor do livro: ".$autor_book."<br>";
                echo "Editora do livro: ".$editora_book."<br>";
                echo "Edição do livro: ".$edicao_book."<br>";
                echo "Ano de publicação do livro: ".$ano_book."<br>";
                echo "Número de páginas do livro: ".$pags_book."<br>";
                echo "Idioma do livro: ".$idioma_book."<br>";
                echo "Quantidade em estoque: ".$estoque_book."<br>";
                echo '</div>';
            }
        }
    }else{
        echo "<br>"."Não existe nenhum livro cadastrado com esse código!";
    }
}