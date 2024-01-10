            <h2>Atualizar dados do livro</h2>
            <p class="pc">É necessário inserir o código do livro que os dados serão atualizados.</p> 
            <p class="pc">Para descobrir o código de um livro basta fazer uma consulta na aba "Consultar Livros".</p>
            <br>
            <form class="form" action="livrocontroller.php" method="post">
                <div class="p1">
                    <label class="required">Código do livro</label><br>
                    <input type="text" name="cod_livro" required><br>
                </div>
                <div class="p1">
                    <label class="required">Nome do livro</label><br>
                    <input type="text" name="nome_livro" required><br>
                </div>
                <div class="p2">
                    <label class="required">Autor</label><br>
                    <input type="text" name="autor" required><br>
                </div>
                <div class="p3">
                    <label>Editora</label><br>
                    <input type="text" name="editora"><br>
                </div>
                <div class="p4">
                    <label>Edicao</label><br>
                    <input type="text" name="edicao"><br>
                </div>
                <div class="p5">
                    <label>Ano de publicação</label><br>
                    <input type="text" name="ano_pub"><br>
                </div>
                <div class="p6">
                <label class="required">Número de páginas</label><br>
                <input type="text" name="pags" required><br>
                </div>
                <div class="p7">
                    <label>Idioma</label><br>
                    <input type="text" name="idioma"><br>
                </div>
                <input class="button" type="submit" name="acao" value="ATUALIZAR LIVRO">
                <input class="reset" type="reset" value="">
            </form>