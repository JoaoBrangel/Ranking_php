<?php
	session_start(); // Habilita o session
	
	//$_SESSION["nome"] = "paulo"; 
	
	
	if(isset($_SESSION["nome"]) ){ // verifica se tem valor na variavel
	echo"nome: ". $_SESSION["nome"];
	}else{
		echo"Session não definida";
	}
	
	session_destroy(); //mata todas as sessoes
?>