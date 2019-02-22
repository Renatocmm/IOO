<!DOCTYPE html>
<html>
	<head>	

		<title>pessoa</title>

	</head>
	<body>
			<form action="recebe_exe1.php" method="post">
				<fieldset>

					<label>Nome:</label>
					<input type="text" name="nome">

					<br/><br/>

					<label>Email:</label>
					<input type="email" name="email">

					<br/><br/>

					<label>CPF:</label>
					<input type="number" name="cpf">

					<br/><br/>

					<label>Sexo:</label>
					<input type="radio" name="sexo" value ="masc">
					<label>MASC</label>
					<input type="radio" name="sexo" value ="fem">
					<label>FEM</label>


					<br/><br/>

					<label>Data de Nascimento:</label>
					<input type="date" name="nasc">

					<br/><br/>

					<input type="submit"  value="enviar">

				</fieldset>
			</form>
	</body>
</html>