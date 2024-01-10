            <h2>Cadastro de Livro</h2>
            <form class="form" action="livrocontroller.php" method="post">
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
                <input class="button" type="submit" name="acao" value="CADASTRAR LIVRO">
                <input class="reset" type="reset" value="">
            </form>
