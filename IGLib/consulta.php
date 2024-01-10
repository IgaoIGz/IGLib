<?php
include 'header.php';
?>
    <main>
        <section class="SectionUM">
            <div class="contentform">
                <form class="formC" action="consulta.php" method="post">
                    <input class="buttonCon" type="submit" name="acao" value="CONSULTA GERAL">
                </form>
                <form class="formC" action="consulta.php" method="post">
                    <input class="buttonCon" type="submit" name="acao" value="CONSULTA POR CÓDIGO">
                    <input class="inp" type="text" name="codig" placeholder="Digite o código" required>
                </form>
                <form class="formC" action="consulta.php" method="post">
                    <input class="buttonCon" type="submit" name="acao" value="CONSULTA POR LIVRO">
                    <input class="inp" type="text" name="name" placeholder="Digite o nome do livro" required>
                </form>
                <form class="formC" action="consulta.php" method="post">
                    <input class="buttonCon" type="submit" name="acao" value="CONSULTA POR AUTOR">
                    <input class="inp" type="text" name="autorr" placeholder="Digite o nome do autor" required>
                </form>
            </div>
            <div class="content">
                <h2>Consultas</h2>
                <p>Nesta página é possível realizar a consulta geral dos livros, a consulta por ID, a consulta pelo nome do livro e também consultar os livros de um autor.</p>
                <?php 
                    $acao = filter_input(INPUT_POST, 'acao'); 
                    if ($acao == "CONSULTA GERAL"){
                        include 'consultas/geral.php';
                    }else if ($acao == "CONSULTA POR CÓDIGO"){
                        include 'consultas/id.php';
                    }else if ($acao == "CONSULTA POR LIVRO"){
                        include 'consultas/nome.php';
                    }else if ($acao == "CONSULTA POR AUTOR"){
                        include 'consultas/autor.php';
                    }
                ?>
            </div>
        </section>
    </main>
<?php
include 'footer.php';
?>