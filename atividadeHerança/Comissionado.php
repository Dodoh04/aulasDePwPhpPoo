<?php 
	class Comissionado
    {
        var $totalVenda;
        var $taxaComissao;

        function vencimento()
        {
           return $this->totalVenda * (($this->taxaComissao * 100 )/$this->taxaComissao);
        }
    }
 ?>