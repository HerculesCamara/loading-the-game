<?php
$url="localhost";
$usuario="root";
$senha="";
$bd="BD Site";
$user = $_POST['tipo'];
$nome = $_POST['nome'];
$con=mysql_connect($url, $usuario, $senha, $bd);
$buscar = $_POST['buscar'];
$sql=mysqli_query($con,"select * from usuario where login='$buscar'");
echo "<table border=1>";
echo "<tr>";
echo "<td>idUsuario</td>";
echo "<td>login</td>";
echo "<td>senha</td>";
echo "</tr>";
	while ($row=mysqli_fetch_array($sql)) {
		echo "<tr>";
		echo "<td>".$row['idUsuario']."</td>";
		echo "<td>".$row['login']."</td>";
		echo "<td>".$row['senha']."</td>";
		echo "</tr>";
	}
echo "</table>";
?>