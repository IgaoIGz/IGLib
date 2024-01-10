            <h2>Adicionar estoque de livro</h2>
            <form class="forme" action="livrocontroller.php" method="post">
                <div>
                    <label class="required">Código do livro:</label><br>
                    <input class="e1" type="text" name="cod_livro" required><br>
                </div>
                <div>
                    <label class="required">Quantidade</label><br>
                    <input class="e2" type="number" name="qtd" required><br>
                </div>
                <input class="buttone" type="submit" name="acao" value="ALTERAR QUANTIDADE">
                <input class="resete" type="reset" value="">
            </form>
