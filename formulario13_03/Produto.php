<?php

	class Cadastro{	
		var $Codigo;
		var $Nome;
		var $Sobrenome;
		var $Email;
		var $CPF;
		var $Sexo;
		var $Usuario;
		var $Senha;

		function ImprimeEtiqueta()
		{
			print 'Código: ' . $this->Codigo . "<br>";
			print 'Nome: ' . $this->Nome . "<br>";
			print 'Sobrenome: ' . $this->Sobrenome . "<br>";
			print 'Email: ' . $this->Email . "<br>";
			print 'CPF: ' . $this->CPF . "<br>";
			print 'Sexo: ' . $this->Sexo . "<br>";
			print 'Usuario: ' . $this->Usuario . "<br>";
			print 'Senha: ' . $this->Senha . "<br>";
		}

		function Desc()
		{
			$this->Total =  $this->Preco-($this->Preco*$this->Porc/100);
			
		}
	}



?>