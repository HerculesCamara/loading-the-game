<?php

function mostrarLogo(){

	include('conexao.php');

	$var = $_SESSION['login'];

	$busca = mysqli_query($con, "select * from usuario where login='$var'");
    $dado = mysqli_fetch_array($busca);
    $url = $dado['url'];

    if($url == ""){
    	echo '<img src="images/perfil.jpg" alt="..." class="img-circle profile_img">';
    }else{
    	echo '<img src="'.$url.'" alt="..." class="img-circle profile_img">';
    }
}

function mostrarLogo1(){

	include('conexao.php');

	$var = $_SESSION['login'];

	$busca = mysqli_query($con, "select * from usuario where login='$var'");
    $dado = mysqli_fetch_array($busca);
    $url = $dado['url'];

    if($url == ""){
		echo '<img src="images/perfil.jpg" alt="">';
	}else{
		echo '<img src="'.$url.'" alt="">';
	}
}

function mostrarLogo2(){

	include('conexao.php');

	$var = $_SESSION['login'];

	$busca = mysqli_query($con, "select * from usuario where login='$var'");
    $dado = mysqli_fetch_array($busca);
    $url = $dado['url'];

    if($url == ""){
		echo '<img class="img-responsive avatar-view" width="120" src="images/perfil.jpg" alt="Foto" title="">';
	}else{
		echo '<img class="img-responsive avatar-view" width="120" src="'.$url.'" alt="Foto" title="">';
	}
}

?>