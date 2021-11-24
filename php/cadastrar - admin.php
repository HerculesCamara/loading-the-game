<?php

$url="localhost";
$usuario="root";
$senha="";
$bd="bd_site";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];
$nascimento = $_POST['nascimento'];
$login = $_POST['log'];
$sen = $_POST['sen'];
$tipo = 'Administrador';

	$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
	$novo_nome = $login.$extensao;
	$diretorio = "../images/upload/";
	$juncao = $diretorio.$novo_nome;

	move_uploaded_file($_FILES['arquivo']['tmp_name'], $juncao);

$con = mysqli_connect($url, $usuario, $senha, $bd);

if (!$con){
	die("Falha de conexão: ".mysqli_connect_error());
}

$busca = mysqli_query($con, "select * from tipo where tipo='$tipo'");
$dado = mysqli_fetch_array($busca);
$tipo = $dado['idtipo'];

$query = mysqli_query($con,"insert into usuario (nome, email, telefone, genero, nascimento, login, senha, id_tipo, url) VALUES ('$nome','$email','$telefone','$genero','$nascimento','$login','$sen','$tipo','$juncao')");

mysqli_close($con);

echo '<a style="color: green;">Admin cadastrado com sucesso!</a>'; 

?>