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


	// if (isset($_SESSION['logado']) && $_SESSION['logado'] == "s") {
	// 	//se a sessão existir e conter o valor de "s"
	// 	echo "Olá", $_SESSION["usuario"], "<br>";
	// 	echo "<a href='tabuada/exemplotabuada_form.php'>Ver tabuada</a><br>";
	// 	echo "<a href='logout.php'>Desconectar</a>";
	// } else {
	// 	//se a sessão não existir ou o valo rdela nao for "s"
	// 	echo "Session não definida <br>";

	// 	if (isset($_SESSION["erro"]) && $_SESSION["erro"] != "") {

	// 		echo $_SESSION["erro"] . "<br>";
	// 	}

	?>

			<?php 
			//chamando variavel para dizer se foi cadastrado ou não
				if(isset ($_SESSION['msg'])){//se existir a variavel
					echo $_SESSION['msg']; // apresente ela
					unset($_SESSION['msg']);//dps destrua 
				}
			?>
			
		<form action="config.php" method="POST">
			
			<label>Usuario:</label>
			<br>
			<input type="text" name="nomeCadastro" placeholder="usuario">
			<br>
			<label>Senha:</label>
			<br>

			<input type="password" name="senhaCadastro" placeholder="senha">
			<br>
			<input type="submit" value="cadastrar">

		</form>
		<hr>

		
		<form action="verificarLogin.php" method="POST">
			<label>
				<h2>cadastro: não feito ainda</h2>
			</label>
			<label>Usuario:</label>
			<br>
			<input type="text" name="usuario" placeholder="usuario">
			<br>
			<label>Senha:</label>
			<br>
			<input type="password" name="senha" placeholder="senha">
			<br>
			<input type="submit" value="cadastrar">


		</form>



	<?php
	// }
	?>
</body>

</html>