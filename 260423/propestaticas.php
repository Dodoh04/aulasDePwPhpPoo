<?php

class Aplicacao{
    static $Quantidade;
     
    function __construct($Nome){
        self::$Quantidade ++;
        $i = self::$Quantidade;

        echo "Nova aplicação numero. $i: $Nome <br>"; 
    }
}

new Aplicacao('Dia');
new Aplicacao('Gimp');
new Aplicacao('Gnumeric');
new Aplicacao('Abiword');
new Aplicacao('Evolution');

echo '<br> Quantidade de aplicações =' . Aplicacao::$Quantidade . '<br>';

?>