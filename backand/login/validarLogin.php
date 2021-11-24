<?php
include('../../php/conexao.php');

session_start();

$user = $_POST['login'];
$sen = $_POST['senha'];
$tip = $_POST['tipo'];

$busca = mysqli_query($con, "select * from tipo where tipo='$tip'");
$dado = mysqli_fetch_array($busca);
$tipe = $dado['idtipo'];

$query=mysqli_query($con, "select * from usuario where login='$user' and senha='$sen' and id_tipo='$tipe'");
$linhas=mysqli_num_rows($query);
echo "$linhas";

if ($linhas==''){
	$_SESSION['status'] = "error";
}
else {
	if ($tip == 'Administrador'){
		while ($dados=mysqli_fetch_assoc($query)){
		$_SESSION['login'] = $user;
		$_SESSION['senha'] = $sen;
		$_SESSION['tipo'] = $tip;
		header("location: ../../Admin/Admin.html");
	}
	}else {
		if($tip == 'Editor'){
			while ($dados=mysqli_fetch_assoc($query)){
		$_SESSION['login'] = $user;
		$_SESSION['senha'] = $sen;
		$_SESSION['tipo'] = $tip;
		header("location: ../../Editor/editor.html");
	}
		}
	}
}

?>