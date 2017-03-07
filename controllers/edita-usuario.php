<?php include("../infra/connection_factory.php");?>
<?php include("../models/usuario_dao.php");?>


<?php
	$nome = $_POST["nome"];
	$email=$_POST["email"];
	$senha=$_POST["senha"];
	$id=$_POST["id"];
	editar($conexao, $nome, $email, $senha, $id);
	header("Location: ../pages/usuarios.php");
	die();


	





	


