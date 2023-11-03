<?php
session_start();


// cadadastro ============================
include("databaseconnect.php"); 
$nome = filter_input(INPUT_POST, 'nomeCadastro', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senhaCadastro', FILTER_SANITIZE_SPECIAL_CHARS);

// echo "$nome";
// echo "$senha";

$cadastrar_usuario = "insert into usuario (nome, senha) values ('$nome', '$senha')";
mysqli_query($con, $cadastrar_usuario);

if(mysqli_insert_id($con)){
    $_SESSION['msg'] = "<p style='color:green'>Usuario cadastrado com sucesso</p>";
    header("location:login.php");
}else{
    $_SESSION['msg'] = "<p style='color:red'>Usuario ou senha incorretos</p>";
    header("location: login.php");
}
// login =========
$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];


	if($usuario === "uni" && $senha === "123"){
		$_SESSION['logado'] = 's';
		$_SESSION['usuario'] = $usuario;
		$_SESSION['erro'] = "";
	}
	$_SESSION['erro'] = "Login ou senha incorretos";
	
	header("Location: login.php");//sensitive redireciona em php ======== só funciona em pagina em branco!!!
