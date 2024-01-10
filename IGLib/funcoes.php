<?php
include 'header.php';
?>
    <main>
        <section class="SecUm">
            <h2>
                Gerenciamento de Livros
            </h2>
            <form class="formtwo" action="funcoes.php" method="post">
                <input class="buttonC" type="submit" name="acao" value="CADASTRAR LIVRO">
                <input class="buttonA" type="submit" name="acao" value="ATUALIZAR LIVRO">
                <input class="buttonD" type="submit" name="acao" value="DELETAR LIVRO">
                <input class="buttonE" type="submit" name="acao" value="ESTOQUE">
            </form>
            <?php
                $acao = filter_input(INPUT_POST, 'acao'); 
                if ($acao == "CADASTRAR LIVRO") {
                    include 'CUD/cadastro.php';
                }else if ($acao == "ATUALIZAR LIVRO") {
                    include 'CUD/update.php';
                }else if ($acao == "DELETAR LIVRO") {
                    include 'CUD/delete.php';
                }else if ($acao == "ESTOQUE"){
                    include 'CUD/estoque.php';
                }
            ?>
            <?php
            if(isset($_GET['cadastrado'])){
                echo '
                    <div class="center">
                        <p class="textcenter">
                            Livro cadastrado com sucesso!
                        </p>
                    </div>
                ';
            }else if(isset($_GET['atualizado'])){
                echo '
                    <div class="center">
                        <p class="textcenter">
                            Livro atualizado com sucesso!
                        </p>
                    </div>
                ';
            }else if(isset($_GET['deletado'])){
                $n = urldecode($_GET['n']);
                $c = urldecode($_GET['c']);
                echo '
                    <div class="center">
                        <p class="textcenter">
                            O livro '.$n.', de código '.$c.', foi deletado com sucesso!
                        </p>
                    </div>
                ';
            }else if(isset($_GET['error-del'])){
                $c = urldecode($_GET['c']);
                echo '
                    <div class="alert">
                        <p>Ocorreu um erro ao deletar o livro de código '.$c.'. O livro não existe!</p>
                    </div>
                ';
            }else if(isset($_GET['error-att'])){
                $c = urldecode($_GET['c']);
                echo '
                    <div class="alert">
                        <p>Ocorreu um erro ao atualizar o livro de código '.$c.'. O livro não existe!</p>
                    </div>
                ';
            }else if(isset($_GET['EADD'])){
                echo '
                    <div class="alert">
                        <p>A quantidade em estoque foi alterada com sucesso.</p>
                    </div>
                ';
            }else if(isset($_GET['ERROREADD'])){
                echo '
                    <div class="alert">
                        <p>Erro ao alterar a quantidade em estoque. O código inserido não existe.</p>
                    </div>
                ';
            }

            ?>

        </section>
    </main>
<?php
include 'footer.php';
?>