<?php

	class pessoa
	{
		public $nome;
		public $email;
		public $cpf;
		public $sexo;
		public $idade;

		public function __construct($nome, $email, $telefone, $idade, $sexo, $cpf)
			{
				$this->nome = $nome;
				$this->email = $email;
				$this->telefone = $telefone;
				$this->idade = $idade;
				$this->sexo = $sexo;
				$this->cpf = $cpf;
			}

		public function exibe_dados_pessoa()
			{
				echo
				"
					<b>Nome:</b>$this->nome<br />
					<b>Email:</b>$this->email<br />
					<b>Telefone:</b>$this->telefone<br />
					<b>CPF:</b>$this->idade<br />
					<b>Sexo:</b>$this->sexo<br />
					<b>Idade:</b>$this->cpf<br />
				";
			}
	}	
?>