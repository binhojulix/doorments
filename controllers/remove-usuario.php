<?php include("../infra/connection_factory.php");?>
<?php include("../models/usuario_dao.php");?>


<?php	
	$id = $_POST['id'];
	remover($conexao, $id);
	header("Location: ../pages/usuarios.php?removido=true");
	die();


	
	
