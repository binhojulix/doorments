<?php include("templates/cabecalho.php"); ?>
<?php include("../infra/connection_factory.php");?>
<?php include("../models/usuario_dao.php");?>

<?php
	$id = $_GET['id'];
	$usuario=buscarPorID($conexao, $id);
?>
	

	<form action="../controllers/edita-usuario.php" class="form-horizontal" method="post">
		
		<fieldset>
			<legend>Edição de usuários</legend>
			<input type="hidden" value="<?=$id?>" name="id">
			<div class="form-group">
				<label class="col-sm-2 control-label" for="nome">Nome</label>
				<div class="col-sm-10">
					<input type="text" name="nome" placeholder="Nome"
					 class="form-control" required value="<?=$usuario['nome']?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="email">Email</label>
				<div class="col-sm-10">
					<input type="email" name="email" placeholder="Email" 
					class="form-control" required  value="<?=$usuario['email']?>">
				</div>
			</div>
			

			<div class="form-group">
				<label class="col-sm-2 control-label" for="senha">Senha</label>
				<div class="col-sm-10">
				<input type="password" name="senha" placeholder="Senha" 
				class="form-control" required  value="<?=$usuario['senha']?>">
				</div>
			</div>
			
			<div class="form-group">
	    		<div class="col-sm-offset-2 col-sm-1">
	     			<input type="submit" value="Editar" class="btn btn-success">
	    		</div>
	  		</div>	
		</fieldset>

		
		
		
	

	</form>


<?php include("templates/rodape.php"); ?>