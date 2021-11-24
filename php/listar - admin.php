<?php

function buscarAdmin(){

	include('conexao.php');

	$tip = "Administrador";

    $busca = mysqli_query($con, "select * from tipo where tipo='$tip'");
    $dado = mysqli_fetch_array($busca);
    $tipo = $dado['idtipo'];

    $busc = mysqli_query($con, "select * from usuario where id_tipo='$tipo'");

    while($linha = mysqli_fetch_assoc($busc)){
        {
            echo '<tr class="even pointer">';
            echo '<td><a href="edtAdmin.html">'. $linha['id_usuario'] .'</a></td>';
            echo '<td class=" last"><a href="edtAdmin.html">'. $linha['nome'] .'</a></td>';
            echo '</tr>';   
        }
                              
    }
    mysqli_close($con);
}

function buscarEditor(){

	include('conexao.php');

	$tip = "Editor";

    $busca = mysqli_query($con, "select * from tipo where tipo='$tip'");
    $dado = mysqli_fetch_array($busca);
    $tipo = $dado['idtipo'];

    $busc = mysqli_query($con, "select * from usuario where id_tipo='$tipo'");

    while($linha = mysqli_fetch_assoc($busc)){
        {
            echo '<tr class="even pointer">';
            echo '<td><a href="edtAdmin.html">'. $linha['id_usuario'] .'</a></td>';
            echo '<td class=" last"><a href="edtAdmin.html">'. $linha['nome'] .'</a></td>';
            echo '</tr>';   
        }
                              
    }
    mysqli_close($con);
}

	function mostrarUsuario(){
		include('conexao.php');
		$nome = $_SESSION['login'];

		$busca = mysqli_query($con, "select * from usuario where login='$nome'");
		$dado = mysqli_fetch_array($busca);
		$log= $dado['nome'];

		echo '<span>Bem vindo,</span>';
		echo '<h2>'.$log.'</h2>';
	}

	function mostrar(){
		include('conexao.php');
		$nome = $_SESSION['login'];

		$busca = mysqli_query($con, "select * from usuario where login='$nome'");
		$dado = mysqli_fetch_array($busca);
		$log= $dado['nome'];

		echo '<h3>'.$log.'</h3>';
	}

	function mostrar1(){
		include('conexao.php');
		$nome = $_SESSION['login'];

		$busca = mysqli_query($con, "select * from usuario where login='$nome'");
		$dado = mysqli_fetch_array($busca);
		$log= $dado['nome'];

		echo $log;
	}
?>