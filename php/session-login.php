<?php
session_start();
if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true) and (!isset($_SESSION['tipo']) == true)){
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	unset($_SESSION['tipo']);
	header('location:../login/login.html')
}

$logado = $_SESSION['login']
?>