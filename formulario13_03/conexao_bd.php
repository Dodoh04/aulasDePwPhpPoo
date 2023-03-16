<?php 

	$codCli = '1';
	$nome = 'Alison';
	$sobrenome = 'Rodrigo';
	$email = 'etec@etecia.com.br';
	$cpf = '12345678915';
	$sexo = 'M';
	$usuario = '67891';
	$senha = '12345';


	$connection = mysqli_connect($codCli,$nome,$sobrenome,$email,$cpf,$sexo,$usuario,$senha);

	mysqli_set_charset($connection,"utf8");

	if (mysqli_connect_error()) {
		echo "Erro ao conectar com o banco de dados" . mysql_connect_error();
	}