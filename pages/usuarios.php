<?php include("templates/cabecalho.php"); ?>
<?php include("../controllers/lista-usuario.php"); 
verificaUsuario();
?>



	<form class="form-horizontal">
		
	
		<div class="jumbotron">
			<h3 class="text-center">Listagem de usuários</h3>
		</div>

		<?php 
			if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') {
		?>
		<p class="alert-danger">Usuário apagado com sucesso.</p>

		<?php
			} 

		?>
			
			

				<table class="table table-striped table-bordered">
					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>Excluir</th>
						<th>Editar</th>
					</tr>	

				<?php
					foreach($usuarios as $user) :
				?>

					<tr>
						<td><?= $user['nome'] ?></td>
						<td><?= $user['email'] ?></td>

						<td>
							<form action="../controllers/remove-usuario.php" method="post">
								<input type="hidden" name="id" value="<?=$user['id']?>" />
								  <button class="btn btn-danger">remover</button>
							</form>
						</td>

						<td><a class="btn btn-primary" href="editar_usuario.php?id=<?=$user['id']?>">alterar</a>


					</tr>

				<?php
					endforeach
				?>
				</table>

			
		
		
	</form>


<?php include("templates/rodape.php"); ?>