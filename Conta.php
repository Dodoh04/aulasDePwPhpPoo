<?php
    class Conta
    {
        var $agencia;
        var $codigo;
        var $dataDeCriacao;
        var $titular;
        var $senha;
        var $saldo;
        var $cancelada;


        //diminui o saldo em quantia
        function retirar ($quantia)
        {
            if($quantia > 0 ){
                $this->saldo -= $quantia;

            }
        }
        //aumentar o saldo em quantia
        function depositar ($quantia)
        {
            if($quantia > 0 ){
                $this->saldo += $quantia;

            }
        }
        //obter saldo
        function obterSaldo()
        {
            return $this->saldo; 
        }
        //metodo contruct 
        function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo)
        {
           $this->agencia = $agencia;
           $this->codigo = $codigo;
           $this->dataDeCriacao = $dataDeCriacao;
           $this->titular = $titular;
           $this->senha = $senha; 
           $this->saldo = $saldo; 

           //chamada a outro método da classe
           $this->depositar($saldo);
           $this->cancelada = false; 
        }

        //método destrutor finaliza o objeto
        function __destruct()
        {
            echo "<br> Objeto Conta {$this->codigo} de {$this->titular->nome} finalizada ... <br>"
        }

    }
?>