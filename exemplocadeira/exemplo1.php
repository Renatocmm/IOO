
<?php
	include("cadeira.php");

	$c1 = new cadeira("Azul", "5.3", "Ferro", "10", "120", "0.4", true, "0.4", "0.85");

	$c2 = new cadeira("Preta", "4.5", "madeira", "8", "130", "0.5", false, "0.5", "0.9");
	
	$c1->aumentar(0.5);
	//print_r($c1); //mostra a estrutura da variavel;

	

?>
<table border = "1">
<tr>
	<th>cor</th>
	<th>peso</th>
	<th>material</th>
	<th>durabilidade</th>
	<th>custo</th>
	<th>tamanho</th>
	<th>encosto</th>
	<th>regulagem_minima</th>
	<th>regulagem_maxima</th>
</tr>			

<?php
	$c1->escreve_linha();

	$c2->escreve_linha();
?>
</table>								
	

