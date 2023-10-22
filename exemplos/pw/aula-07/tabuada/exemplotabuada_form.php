<?php
//verifica se a sessão possui dados. caso não tenha, redireciona para o login (home.php)
	session_start();
	if(!($_SESSION['logado'] == 's')){
		header("Location: ../home.php");
		exit();
	}
	else{
		echo "Olá ". $_SESSION['usuario'] . "!<br/>";
	}0
?>

<form action="exemplotabuada.php" method="get">
	<label>Tabuada do: </label>
	<input type="number" name="tabuada">
	<br/>
	Fazer por<br/>
	FOR<input type="radio" name="tipo" value="for"><br/>
	WHILE<input type="radio" name="tipo" value="while"><br/>
	<input type="submit" value="enviar">
</form>