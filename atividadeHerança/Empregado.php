<?php 
	class Empregado 
    {
        var $nome;
        var $sobrenome;
        var $cpf;

        
        function Vencimento ($quantia)
        {
            $quantia = $quantia;
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