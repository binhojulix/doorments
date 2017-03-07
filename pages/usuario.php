<?php include("templates/cabecalho.php"); 

verificaLogado();
?>



	

	<form action="../controllers/salva-usuario.php" class="form-horizontal" method="post">
		
		<fieldset>
			<legend>Cadastro de usuários</legend>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="nome">Nome</label>
				<div class="col-sm-10">
					<input type="text" name="nome" 
					placeholder="Nome" class="form-control" required>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="email">Email</label>
				<div class="col-sm-10">
					<input type="email" name="email" 
					placeholder="Email" class="form-control" required>
				</div>
			</div>
			

			<div class="form-group">
				<label class="col-sm-2 control-label" for="senha">Senha</label>
				<div class="col-sm-10">
				<input type="password" name="senha" 
				placeholder="Senha" class="form-control" required>
				</div>
			</div>
			
			<div class="form-group">
	    		<div class="col-sm-offset-2 col-sm-1">
	     			<input type="submit" value="Cadastrar" class="btn btn-success">
	    		</div>
	  		</div>	
		</fieldset>

		
		
		
	

	</form>


<?php include("templates/rodape.php"); ?>