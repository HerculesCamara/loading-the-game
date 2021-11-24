<?php

	function verificadorId(){
		include("../../index.php");
		if ($idIndNoticia!=null){
			$idNoticia = $idIndNoticia;
		}
		include("../../noticias/index.php");
		if ($idPgNoticia!=null) {
			$idNoticia = $idPgNoticia;
		}
	}

	function titulo(){
		include("../conexao.php");
		$titulo = msqli_query($con, "select (titulo) from noticia where id = $idNoticia");
		return $titulo;
	}

	function descricao(){
		include("../conexao.php");
		$descricao = msqli_query($con, "select (descricao) from noticia where id = $idNoticia");
		return $descricao;
	}

	function autor(){
		include("../conexao.php");
		$idAutor = msqli_query($con, "select (idAutor) from noticia where id = $idNoticia");
		$autor = msqli_query($con, "select (nome) from user where id = $idAutor");
		return $autor;
	}

	function data(){
		include("../conexao.php");
		$data = msqli_query($con, "select (data) from noticia where id = $idNoticia");
		return $data;
	}
?>