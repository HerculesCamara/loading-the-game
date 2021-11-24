<?php

$url="localhost";
$usuario="root";
$senha="";
$bd="BD Site";
$nome = $_POST['nome'];
$contato = $_POST['contato']
$login = $_POST['login'];
$senha = $_POST['senha'];
$con=mysql_connect($url, $usuario, $senha, $bd);
if (!con) {
	die("Falha na conexão: ".mysqli_connect_error());
}

echo "Conectado <br>";
$sql="INSERT INTO tipo VALUES('$nome', '$contato', '$login', '$senha')";
if (msqli_query($con, $sql)) {
	echo "Inserido com sucesso";
}else{
	echo "Erro:. ".$sql."<br>".msqli_error($con);
}
?>