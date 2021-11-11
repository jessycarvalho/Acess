<?php
session_start();
include_once("conex.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$rslt = "INSERT INTO users (nome, email, created) VALUES ('$nome', '$email', NOW())";
$rsltuser = mysqli_query($conn, $rslt);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:#71baff;'>Usuário cadastrado com sucesso</p>";
	header("Location: cad.php");
}else{
	$_SESSION['msg'] = "<p style='color:#fb808b;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cad.php");
}


