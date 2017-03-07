<?php include("../infra/connection_factory.php");
      include("../models/usuario_dao.php");
      include("logica-usuario.php");?>

<?php	
	$nome =$_POST["nome"];
	$email=$_POST["email"];
	$senha=$_POST["senha"];
	salvar($conexao, $nome, $email, $senha);

  
   if(salvar){

		$usuario = array("nome"=>$nome, "email"=>$email);
		logaUsuario($usuario["email"]);
		header("Location: ../pages/usuarios.php?login=1");
		

   }else{
   	  mysqli_error($conexao);
	  header("Location: ../pages/usuario.php");
   }
	
	die();

	


