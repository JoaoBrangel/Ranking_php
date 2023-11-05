<?php
session_start();
require("databaseconnect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<header>
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="conteudo.php">CONTEUDO</a></li>
			<li><a href="descritiva.php">DESCRITIVA</a></li>
			<li><a href="contato.php">CONTATO</a></li>
			<li><a href="#">LOGIN</a></li>
		</ul>
	</header>
	<?php

	?>

	<?php
	//chamando variavel para dizer se foi cadastrado ou não
	if (isset($_SESSION['status'])) { //se existir a variavel
		echo $_SESSION['status']; // apresente ela
		unset($_SESSION['status']); //dps destrua 
	}
	?>

	<form action="config.php" method="POST">

		<label>Usuario:</label>
		<br>
		<input type="text" name="nomeCadastro" minlength="8" placeholder="usuario">
		<br>
		<label>Senha:</label>
		<br>

		<input type="password" name="senhaCadastro" minlength="4" placeholder="senha">
		<br>
		<input type="submit" value="cadastrar">

	</form>

	<hr>

	<?php
if (isset($_SESSION['erro'])) { //se existir a variavel
	echo $_SESSION['erro']; // apresente ela
	unset($_SESSION['erro']); //dps destrua 
}
	?>
	<form action="config_login.php" method="POST">
		<label>
			<h2>Login</h2>
		</label>
		<label>Usuario:</label>
		<br>
		<input type="text" name="usuarioLogin" placeholder="usuario">
		<br>
		<label>Senha:</label>
		<br>
		<input type="password" name="senhaLogin" placeholder="senha">
		<br>
		<input type="submit" value="entrar">


	</form>



	<?php
	// }
	?>
</body>

</html>