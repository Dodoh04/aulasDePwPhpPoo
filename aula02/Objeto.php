<?php
    include_once 'Pessoa.php';
    include_once 'Conta.php';


    $carlos = new Pessoa;
    $carlos->codigo = 10;
    $carlos->nome = "Carlos da Silva";
    $carlos->altura = 1.85;
    $carlos->idade = 25;
    $carlos->nascimento = '20/04/1974';
    $carlos->escolaridade = "Ensino Médio";

    echo "Manipulando o Objeto $carlos->nome : <br>";
    echo "{$carlos->nome} é formado em: {$calor->escolaridade}<br>";

    $carlos->formar('Técnico em Eletricidade');
    echo "{$carlos->nome} é formado em {$carlos->escolaridade}<br>";
    echo "{$carlos->nome} possui {$carlos->idade}anos<br>";
   
    $carlos->envelhecer(1);
    echo "{$carlos->nome} possui {$carlos->idade}anos<br>";

    $conta_carlos = new Conta;
    $conta_carlos->Agencia = 6677;
    $conta_carlos->Codigo = "CC.12.34.56";
    $conta_carlos->DataDeCriacao = "10/07/02";
    $conta_carlos->Titular = $carlos;
    $conta_carlos->Senha = 9876;
    $conta_carlos->Saldo = 567.89;
    $conta_carlos->Cancelada = false;

    echo "<br";
    echo "Manipulando a conta de {$conta_carlos->Titular->nome}<br>";
    echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()}<br>";

    $conta_carlos->depositar(20);
    echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()}<br>";

    $conta_carlos->retirar(10);
    echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()}<br>";


?>