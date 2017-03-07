<?php


		function salvar($conexao, $nome, $email, $senha) {
		    $query = "insert into usuario (nome, email, senha) values ('{$nome}', '{$email}', md5('{$senha}'))";
		    $resultadoDaInsercao = mysqli_query($conexao, $query);
		    mysqli_close($conexao);
		    return $resultadoDaInsercao;
		}

		function editar($conexao, $nome, $email, $senha, $id) {
		    $query = "update usuario set nome = '{$nome}', email= '{$email}', senha= '{$senha}' where id={$id}";
		    $resultadoDaInsercao = mysqli_query($conexao, $query);
		    mysqli_close($conexao);
		    return $resultadoDaInsercao;
		}

		function listar($conexao) {
		    $usuarios = array();
		    $resultado = mysqli_query($conexao, "select * from usuario");

		    while($usuario = mysqli_fetch_assoc($resultado)) {
		        array_push($usuarios, $usuario);
		    }
		    mysqli_close($conexao);
    		return $usuarios;

		}

		function remover($conexao, $id) {
		    $query = "delete from usuario where id = {$id}";
		    return mysqli_query($conexao, $query);
		}


		function buscarPorID($conexao, $id){
			 $query = "select * from usuario where id = {$id}";
		   	 $resultado = mysqli_query($conexao, $query);
		     return mysqli_fetch_assoc($resultado);
		}

		function buscaUsuario($conexao, $email, $senha){
			$senhaMd5 = md5($senha);
		    $query = "select * from usuario where email='{$email}' and senha='{$senhaMd5}'";
		    $resultado = mysqli_query($conexao, $query);
		    $usuario = mysqli_fetch_assoc($resultado);
		    return $usuario;
		}
