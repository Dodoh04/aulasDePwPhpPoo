<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$sobrenome = mysqli_escape_string($connection,$_POST['sobrenome']);
		$email = mysqli_escape_string($connection,$_POST['email']);
		$cpf = mysqli_escape_string($connection,$_POST['cpf']);
		$codCli = mysqli_escape_string($connection,$_POST['codCli']);
        $sexo = mysqli_escape_string($connection,$_POST['sexo']);
        $usuario = mysqli_escape_string($connection,$_POST['usuario']);
        $senha = mysqli_escape_string($connection,$_POST['senha']);

		$sql = "UPDATE tbClientes SET nomeCli = '$nome', sobreNomeCli = '$sobrenome', emailCli = '$email', cpf = '$sex', cpf = '$cpf', usuario = '$usuario' WHERE codCli = '$codCli'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
