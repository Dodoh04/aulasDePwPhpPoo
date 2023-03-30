<?php 
	class Horista 
    {
        var $precoHora = 8;
        var $horasTrabalhadas = 10;

        function extra($bruto = 0)
        {
           $this->precoHora * $this->horasTrabalhadas = $bruto;
           return $bruto;
        }
        
    }
 ?>