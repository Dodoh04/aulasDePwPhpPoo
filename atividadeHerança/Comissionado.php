<?php 
	class Comissionado extends Empregado
    {
        var $totalVenda;
        var $taxaComissao;

        function __construct($nome, $sobrenome, $cpf, $totalVenda, $taxaComissao)
        {
            parent::__construct($nome, $sobrenome, $cpf);
            $this->totalVenda = $totalVenda;
            $this->taxaComissao = $taxaComissao;

        }       
        function Vencimento ($quantia)
        {
            $quantia = $this->precoHora * $this->horasTrabalhadas;
            
            if($quantia <= 1302.00 ){
               $inss = 0.075;
               $quantia -= $inss;
            }
            if($quantia <= 2571.29){
                $inss = 0.09;
               $quantia -= $inss;
            }
            if($quantia <= 3000.00){
                $inss = 0.12;
                $quantia -= $inss;
            }
            else{
                $inss = 263.33;
                $quantia -= $inss;
            }
        }
    }
 ?>