<?php 
if (!isset($_SESSION['usuario'])) {
    header('Location: ../login.php?erro=true');
    exit;
}
?>
    <div class="content">
        <h2 class="center white">
            Perfil
        </h2>
        <form class="py" action="conta.php" method="post">
            <div class="white just bold padall bb grid3">
                <p class="inbl">
                    Nome de usuário: <?php echo $_SESSION['usuario']; ?>
                </p>
                <input class="bw noborder inbl pos" type="submit" name="acao" value="Alterar Usuário">
            </div>
        </form>
        <form class="py" action="conta.php" method="post">
            <div class="white just bold padall bb grid3">
                <p class="inbl">
                    Email: 
                    <?php 
                        if(isset($_SESSION['email'])){
                            echo $_SESSION['email'];
                        }else{
                            echo "Não foi possível acessar o email";
                        }
                    ?>
                </p>
                <input class="bw noborder inbl pos" type="submit" name="acao" value="Alterar Email">
            </div>
        </form>
        <form class="py" action="conta.php" method="post">
            <div class="white just bold padall bb grid3">
                <p class="inbl">
                    Número de celular: 
                    <?php 
                        if($_SESSION['tel']){
                            echo $_SESSION['tel'];
                        }else{
                            echo "Não possuí.";
                        }
                    ?> 
                </p>
                <input class="bw noborder inbl pos" type="submit" name="acao" value="Alterar Celular">
            </div>
        </form>
    </div>
