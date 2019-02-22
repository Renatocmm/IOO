<?php
	include ("pessoa.php");

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$cpf = $_POST["cpf"];
	$sexo = $_POST["sexo"];
	$data_nasc = $_POST["nasc"];

	$p = new pessoa($nome, $email, $cpf, $sexo, $data_nasc);

	$p->exibe_dados();
?>