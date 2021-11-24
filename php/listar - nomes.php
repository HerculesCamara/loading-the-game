<?php

function nome(){
		include('conexao.php');
		$nome = $_SESSION['login'];

		$busca = mysqli_query($con, "select * from usuario where login='$nome'");
		$dado = mysqli_fetch_array($busca);
		$none= $dado['nome'];

		echo '<input placeholder="'.$none.'" type="text" id="nome" required="required" class="form-control col-md-7 col-xs-12">';
}

function email(){
		include('conexao.php');
		$no = $_SESSION['login'];

		$busca = mysqli_query($con, "select * from usuario where login='$no'");
		$dado = mysqli_fetch_array($busca);
		$email= $dado['email'];

		echo '<input placeholder="'.$email.'" type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">';
}

function telefone(){
		include('conexao.php');
		$nom = $_SESSION['login'];

		$busca = mysqli_query($con, "select * from usuario where login='$nom'");
		$dado = mysqli_fetch_array($busca);
		$telefone= $dado['telefone'];

		$mas = "'(00) 00000-0000'";

		echo '<input placeholder="'.$telefone.'" id="Telefone" class="form-control" class="form-control col-md-7 col-xs-12" type="text" name="Telefone" onkeypress="$(this).mask('.$mas.');">';
}

function nascimento(){
		include('conexao.php');
		$n = $_SESSION['login'];

		$busca = mysqli_query($con, "select * from usuario where login='$n'");
		$dado = mysqli_fetch_array($busca);
		$nascimento= $dado['nascimento'];

		$mas = "'00/00/0000'";

		echo '<input placeholder="'.$nascimento.'" id="dataNascimento" class="form-control col-md-7 col-xs-12" type="text" name="middle-name" onkeypress="$(this).mask('.$mas.');">';
}


?>