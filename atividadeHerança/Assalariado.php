<?php 
	class Assalariado extends Empregado
    {
        var $salario;

        function __construct($nome, $sobrenome, $cpf, $salario)
        {
            parent::__construct($nome, $sobrenome, $cpf);
            $this->salario = $salario;
            

        }       

        function Vencimento ($quantia)
        {
            if($this->salario > 0)
            {
                $quantia = $this->salario;
            
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
    }
 ?>