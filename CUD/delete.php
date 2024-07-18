            <h2>Deletar livro</h2>
            <p class="pc">É necessário inserir o código do livro que os dados serão deletados.</p> 
            <p class="pc">Para descobrir o código de um livro basta fazer uma consulta na aba "Consultar Livros".</p>
            <br>
            <form class="formd" action="livrocontroller.php" method="post">
                <div class="del">
                    <label class="required">Código do livro</label><br>
                    <input type="text" name="cod_livro" required><br>
                </div>
                <input class="buttonDel" type="submit" name="acao" value="DELETAR LIVRO">
            </form>