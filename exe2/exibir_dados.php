<?php
	
	include("Professor.php");
	include("Aluno.php");
	include("Secretario.php");

	$professor = new Professor("roger", "rogerinho@gmail.com", "33226699", "37", "masc", "123456789", "1300", "matematica");
	$aluno = new Aluno("paula", "paulinha@gmail.com", "33226699", "1234598764", "16", "fem", "123456789", "174", "8");
	$secretario= new Secretario("vagner", "valner@gmail.com", "33226699", "28", "masc", "1234598765", "1300");

	$professor 	->exibe_dados();
	$aluno 		->exibe_dados();
	$secretario ->exibe_dados();
?>