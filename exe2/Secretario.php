<?php
	
	include_once("pessoa2.php");

	class Secretario extends pessoa
	{
		public $salario;

		public function __construct($nome, $email, $telefone, $idade, $sexo, $cpf, $salario)
			{
				parent::__construct($nome, $email, $telefone, $idade, $sexo, $cpf);

				$this->salario = $salario;
			}

			public function exibe_dados()
			{
				$this->exibe_dados_pessoa();

				echo
				"
					<b>Salario:</b>$this->salario<br />
					<br /><br />
				";
			}
	}

?>