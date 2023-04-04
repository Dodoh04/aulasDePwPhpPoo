<?php 
	class empregado 
    {
        var $nome;
        var $sobrenome;
        var $cpf;

        
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