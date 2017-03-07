<?php include("templates/cabecalho.php"); ?>



<?php if(isset($_GET["login"]) && $_GET["login"]==false) { ?>
    <p class="alert-danger">Usuário ou senha inválida!</p>
<?php } ?>

<?php if(isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"]==true) { ?>
    <p class="alert-danger">Faça Login!</p>
<?php } ?>



<?php if(!usuarioEstaLogado()) { ?>

     <h3>Login</h3>
    <form action="../controllers/login.php" method="post" class="col-sm-5">
        <table class="table">
            <tr>
                <td>Email</td>
                <td><input class="form-control" type="email" name="email"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input class="form-control" type="password" name="senha"></td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit">Login</button></td>
            </tr>
            <tr>
                <td><a href="usuario.php">Cadastrar-se</a></td>
            </tr>
        </table>

    </form>

<?php  }else{
     header("Location: ../pages/usuarios.php?login=1");
 }
 ?>



<?php include("templates/rodape.php"); ?>
