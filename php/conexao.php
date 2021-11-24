<?php

$url="localhost";
$usuario="root";
$senha="";
$bd="bd_site";

$con = mysqli_connect($url, $usuario, $senha, $bd);

if (!$con) {
	die("Falha na conexão: ".mysqli_connect_error());
}

?>