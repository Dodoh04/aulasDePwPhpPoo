<?php 
	class Empregado 
    {
        var $nome;
        var $sobrenome;
        var $cpf;
        var $salario;
        var $quantiaIr;
        var $quantiaInss;

        function inss(){
            if($this->salario <= 1302.00 ){
                $inss = 0.075;
                $inss * $this->salario = $this->quantiaInss;
             }
             if($this->salario <= 2571.29){
                 $inss = 0.09;
                 $inss * $this->salario = $this->quantiaInss;
             }
             if($this->salario <= 3000.00){
                 $inss = 0.12;
                 $inss * $this->salario = $this->quantiaInss;
             }
             else{
                 $this->quantiaInss = 263.33;
             }
        }
        function ir($quantia){
            if($quantia <= 1903.09 ){
                $ir = 0.0;
                $quantia -= $ir;
             }
             if($quantia <= 2826.65){
                 $ir = 0.075;
                $quantia -= $ir;
             }
             if($quantia <= 3751.05){
                 $ir = 0.15;
                 $quantia -= $ir;
             }
             
             if($quantia <= 4664.68){
                $ir = 0.225;
                $quantia -= $ir;
            }
             else{
                $ir = 0.275;
                $quantia -= $ir;
             }
        }


        function Vencimento ()
        {
            return (ir + inss) - salario;
            //tirar inss e/ou ir aqui
        }

         function __construct($nome, $sobrenome, $cpf, $salario, $quantiaIr, $quantiaInss)
        {
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->$cpf = $cpf;
            $this->salario = $salario;
            $this->$quantiaIr = $quantiaIr;
            $this->$quantiaInss = $quantiaInss;

         }
         //metodo contruct 
         function __destruct()
         {
           echo "<br>Objeto {$this->nome} finalizado ... <br> ";
         }
         
    }    
 ?>