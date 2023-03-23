<?php
    class ContaCorrente extends Conta{
        var $limite;

        function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $limite)
        {
            parent::__construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo);
            $this->limite = $limite;
        }

        function Retirar($quantia)
        {
        $cpnf = 0.5;
        if(($this->saldo + $this->limite) >= $quantia)
        {
            parent::Retirar($quantia);

            parent:: retirar($quantia * $cpnf);

        }   
        else
        {
            echo "<br> Retirrada não permitida ...</br>";
        }         
        return true;
        }
    }
?>