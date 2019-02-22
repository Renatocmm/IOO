<?php
	
	include_once("pessoa2.php");

	class Aluno extends pessoa
	{
		public $matricula;
		public $nota;

		public function __construct($nome, $email, $telefone, $idade, $sexo, $cpf, $disciplina, $matricula, $nota)
			{
				parent::__construct($nome, $email, $telefone, $idade, $sexo, $cpf);

				$this->matricula = $matricula;
				$this->nota = $nota;

			}

			public function exibe_dados()
			{
				$this->exibe_dados_pessoa();

				echo
				"
					<b>Matricula:</b>$this->matricula<br />
					<b>Nota:</b>$this->nota<br />
					<br /><br />
				";
			}
	}

?>