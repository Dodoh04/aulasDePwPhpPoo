<?php 
	class Horista 
    {
        var $precoHora = 8;
        var $horasTrabalhadas = 10;

        function vencimento()
        {
            return $this->precoHora * $this->horasTrabalhadas;
            
           
        }
        
    }
    
 ?>