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
	include("cadeira.php");

	$c1 = new cadeira("Azul", "5.3", "Ferro", "10", "120", "0.4", true, "0.4", "0.85");

	/*$c1->cor = "Azul";
	$c1->peso = "5.3";
	$c1->material = "Ferro";
	$c1->durabilidade = "10";
	$c1->custo = "120";
	$c1->tamanho = "0.4";
	$c1->encosto= true;
	$c1->regulagem_minima= "0.4";
	$c1->regulagem_maxima= "0.85"; */

	//print_r($c1); //mostra a estrutura da variavel;
	$c1->aumentar(0.5);

	echo
	'
			<tr>
				<td>'.$c1->cor.'</td>
				<td>'.$c1->peso.'</td>
				<td>'.$c1->material.'</td>
				<td>'.$c1->durabilidade.'</td>
				<td>'.$c1->custo.'</td>
				<td>'.$c1->tamanho.'</td>
				<td>'.$c1->encosto.'</td>
				<td>'.$c1->regulagem_minima.'</td>
				<td>'.$c1->regulagem_maxima.'</td>
			</tr>
	';

	echo"<br/><br/>";
	//print_r($c1);
	echo"<br/><br/>";

	$c2 = new cadeira("Preta", "4.5", "madeira", "8", "130", "0.5", false, "0.5", "0.9");

	/*$c2->cor = "Preta";
	$c2->peso = "4.5";
	$c2->material = "madeira";
	$c2->durabilidade = "8";
	$c2->custo = "130";
	$c2->tamanho = "0.5";
	$c2->encosto= false;
	$c2->regulagem_minima= "0.5";
	$c2->regulagem_maxima= "0.9";*/

	echo
	'		
			<tr>
				<td>'.$c2->cor.'</td>
				<td>'.$c2->peso.'</td>
				<td>'.$c2->material.'</td>
				<td>'.$c2->durabilidade.'</td>
				<td>'.$c2->custo.'</td>
				<td>'.$c2->tamanho.'</td>
				<td>'.$c2->encosto.'</td>
				<td>'.$c2->regulagem_minima.'</td>
				<td>'.$c2->regulagem_maxima.'</td>
			</tr>
	';

	//print_r($c2); //mostra a estrutura da variavel;

?>
</table>
	

