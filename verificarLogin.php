<?php
	session_start();
	
	


	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];


	if($usuario === "uni" && $senha === "123"){
		$_SESSION['logado'] = 's';
		$_SESSION['usuario'] = $usuario;
		$_SESSION['erro'] = "";
	}
	$_SESSION['erro'] = "Login ou senha incorretos";
	
	header("Location: index.php");//sensitive redireciona em php ======== só funciona em pagina em branco!!!
?>