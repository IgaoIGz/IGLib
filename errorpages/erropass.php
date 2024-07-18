
    <div class="centeraviso">
        <p>
            <?php 
                if ($teste == "cadastro"){
                    echo "Não foi possível cadastrar. As senhas estão diferentes!";
                }else if ($teste == "login"){
                    echo "Não foi possível fazer login. Senha ou usuário inválidos!";
                }
            ?>
        </p>
    </div>
