<?php
	function verificardoId(){
		include ("../../games/index.php");
		$idGame = $id;
	}

	function nome(){
		include("../conexao.php");
		$nome = msqli_query($con, "select (nome) from game where id = $idGame");
		return $nome;
	}

	function descricao(){
		include("../conexao.php");
		$descricao = msqli_query($con, "select (descricao) from game where id = $idGame");
		return $descricao;
	}
?>