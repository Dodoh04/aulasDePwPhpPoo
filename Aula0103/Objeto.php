<?php

	include_once 'Pessoa.php';
	include_once 'Conta.php';

	$carlos= new Pessoa;
	$carlos->Codigo = 10;
	$carlos->Nome = "Carlos da Silva";
	$carlos->Altura = 1.85;
	$carlos->Idade = 25;
	$carlos->Nascimento = '10/04/1976';
	$carlos->Escolaridade = "Ensino Médio";

	echo "Manipulando o objeto";

?>