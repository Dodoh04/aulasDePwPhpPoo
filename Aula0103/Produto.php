<?php

	class Produto{	
		var $Codigo;
		var $Descricao;
		var $Preco;
		var $Qualidade;
		//var $Desconto;
		var $Total;
		var $Porc;

		function ImprimeEtiqueta()
		{
			print 'Código: ' . $this->Codigo . "<br>";
			print 'Descrição: ' . $this->Descricao . "<br>";
			print 'Preço: ' . $this->Preco . "<br>";
			print 'Total: ' . $this->Total . "<br>";
		}

		function Desc()
		{
			$this->Total =  $this->Preco-($this->Preco*$this->Porc/100);
			
		}
	}



?>