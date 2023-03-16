<?php
	
	include_once 'produto.php';

	$produto1 = new Produto;
	//$produto2 = new Produto;
	
	$produto1->Codigo = 4001;
	$produto1->Descricao = 'CD - The Best of Eric Clapton';
	$produto1->Preco = 50;
	$produto1->Porc = 15;

	/*$produto2->Codigo = 4002;
	$produto2->Descricao = 'CD - The  Eagles Hotel California';
	$produto2->Desconto = 15;*/

	$produto1->Desc();
	$produto1->ImprimeEtiqueta();
	//$produto2->ImprimeEtiqueta();
	

?>