<?php

	include('conexao.php');

	$titulo = $_POST['titulo'];
	$noticia = $_POST['noticia'];
	$autor = $_POST['autor'];
	$data = $_POST['data'];
	$tipo = $_POST['tipo'];

	$nome = $_POST['inome'];
	$descricao = $_POST['descricao'];
	$fonte = $_POST['fonte'];

	$extensao = strtolower(substr($_FILES['foto']['name'], -4));
	$novo_nome = $nome.$extensao;
	$diretorio = "../images/upload/";
	$juncao = $diretorio.$novo_nome;

	move_uploaded_file($_FILES['foto']['tmp_name'], $juncao);

	$busca = mysqli_query($con, "select * from categoria where nome='$tipo'");
	$dado = mysqli_fetch_array($busca);
	$id_categoria = $dado['idcategoria'];

	$query = mysqli_query($con,"insert into noticia (titulo, descricao, data, autor, id_categoria) VALUES ('$titulo','$noticia','$data','$autor','$id_categoria')");

	$busca = mysqli_query($con, "select * from noticia where titulo='$titulo'");
	$dado = mysqli_fetch_array($busca);
	$id_noticia = $dado['idnoticia'];

	$query = mysqli_query($con,"insert into imagem (nome, descricao, fonte, url, id_noticia) VALUES ('$nome','$descricao','$fonte','$juncao','$id_noticia')");

	mysqli_close($con);

	echo 'Notícia cadastrada com sucesso!!';
?>