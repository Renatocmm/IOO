<?php
	
	include_once("pessoa2.php");

	class Professor extends pessoa
	{
		public $salario;
		public $disciplina;

		public function __construct($nome, $email, $telefone, $idade, $sexo, $cpf, $salario, $disciplina)
			{
				parent::__construct($nome, $email, $telefone, $idade, $sexo, $cpf);

				$this->salario = $salario;
				$this->disciplina = $disciplina;

			}

			public function exibe_dados()
			{
				$this->exibe_dados_pessoa();

				echo
				"
					<b>Salario:</b>$this->salario<br />
					<b>Disciplina:</b>$this->disciplina<br />
					<br /><br />
				";
			}
	}

?>