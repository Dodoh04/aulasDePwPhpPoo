<?php 
	class Horista extends Empregado
    {
        var $precoHora;
        var $horasTrabalhadas;

        function __construct($nome, $sobrenome, $cpf, $precoHora, $horasTrabalhadas)
        {
            parent::__construct($nome, $sobrenome, $cpf);
            $this->precoHora = $precoHora;
            $this->horasTrabalhadas = $horasTrabalhadas;

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