<?php

$url="localhost";
$usuario="root";
$senha="";
$bd="BD Site";
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$con=mysql_connect($url, $usuario, $senha, $bd);
if (!con) {
	die("Falha na conexão: ".mysqli_connect_error());
}

echo "Conectado <br>";
$sql="INSERT INTO imagem VALUES('$nome', '$descricao')";
if (msqli_query($con, $sql)) {
	echo "Inserido com sucesso";
}else{
	echo "Erro:. ".$sql."<br>".msqli_error($con);
}
?>