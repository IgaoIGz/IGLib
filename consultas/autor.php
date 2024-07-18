<?php 
include 'livrocontroller.php';

if($acao=="CONSULTA POR AUTOR"){
    $autorr = filter_input(INPUT_POST, 'autorr');
    $livrodao->consultar();
    if($livrodao->consultar() == true){
        echo '<h3> Autor(a): '.$autorr.'</h3>';
        foreach($livrodao->consultar() as $consult){
            if ($autorr == $consult['autor']){
                $cod_book =  $consult['cod_livro'];
                $nome_book = $consult['nome'];
                $editora_book = $consult['editora'];
                $edicao_book = $consult['edicao'];
                $ano_book = $consult['ano'];
                $pags_book = $consult['pags'];
                $idioma_book = $consult['idioma'];
                $estoque_book = $consult['estoque'];
                echo '<div class="livro">';
                echo "Livro: ".$nome_book."<br>";
                echo "Código do livro: ".$cod_book."<br>";
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
        echo '<h3> Autor(a): '.$autorr.'</h3>';
        echo "Este autor não possuí nenhum livro registrado. Se for o caso, verifique a ortografia. Lembre-se: maiúsculas e minúsculas diferenciam o resultado da busca.";
    }
}