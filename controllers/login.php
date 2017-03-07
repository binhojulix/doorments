<?php include("../infra/connection_factory.php");
      include("../models/usuario_dao.php");
      include("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

if($usuario == null) {
    header("Location: ../pages/login.php?login=0");
} else {
    logaUsuario($usuario["email"]);
    header("Location: ../pages/usuarios.php?login=1");
}
die();
