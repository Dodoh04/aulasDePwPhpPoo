<?php 
	class Empregado 
    {
        var $nome;
        var $sobrenome;
        var $cpf;

        function inss($quantia){
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
            //tirar inss e/ou ir aqui
        }

         function __construct($nome, $sobrenome, $cpf)
        {
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->$cpf = $cpf;

         }
         //metodo contruct 
         function __destruct()
         {
           echo "<br>Objeto {$this->nome} finalizado ... <br> ";
         }
         
    }    
 ?>