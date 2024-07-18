<?php 


if (!isset($_SESSION['usuario'])) {
    header('Location: ../login.php?erro=true');
    exit;
}
?>
    <div class="content">
        <h2 class="center white">
            Segurança e Privacidade
        </h2>
        <form class="py" action="conta.php" method="post">
            <div class="white just bold padall bb grid3">
                <p class="inbl">
                    Senha
                </p>
                <input class="bw noborder inbl pos" type="submit" name="acao" value="Alterar Senha">
            </div>
        </form>
    </div>