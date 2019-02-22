<?php

	class pessoa
	{
		public $nome;
		public $email;
		public $cpf;
		public $sexo;
		public $data_nasc;

		public function __construct($nome, $email, $cpf, $sexo, $data_nasc)
		{
			$this->nome = $nome;
			$this->email = $email;
			$this->cpf = $cpf;
			$this->sexo = $sexo;
			$this->data_nasc = $data_nasc;
		}

		public function exibe_dados()
		{
			echo
			"
				<b>Nome:</b>$this->nome<br />
				<b>Email:</b>$this->email<br />
				<b>CPF:</b>$this->cpf<br />
				<b>Sexo:</b>$this->sexo<br />
				<b>Data de Nsacimento:</b>$this->data_nasc<br />
			";
		}

	}	
?>