<?php
session_start();
require("databaseconnect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login/cadastro</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/login.css">
</head>

<body>
	<header>
		<a href="index.php"><img src="css/img/LOGO.png" class="logo"></a>

		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="conteudo.php">VOTAR</a></li>
			<li><a href="#.php">TIMES</a></li>
			<li><a href="descritiva.php">DESCRITIVA</a></li>
			<li><a href="contato.php">CONTATO</a></li>
			<li>
				<?php
				if (isset($_SESSION['logado']) && $_SESSION['logado'] == "s") {
					//se a sessão existir e conter o valor de "s"
					echo "Olá ", $_SESSION["usuario"], "<br>";
					echo "<a href='logout.php'>Desconectar</a>";
				} else {
				?>
					<a href="login.php">login</a>
			</li>
		<?php
				}
		?>
		</ul>
	</header>

	<div class="conteiner-login">
		<?php
		if (isset($_SESSION['erro'])) { //se existir a variavel

		?>
			<div class="card-comentario">
				<?php
				echo $_SESSION['erro']; // apresente ela
				unset($_SESSION['erro']); //dps destrua 
				?>
			</div>
		<?php

		}
		?>

		<?php

		//chamando variavel para dizer se foi cadastrado ou não
		if (isset($_SESSION['status'])) { //se existir a variavel

		?>
			<div class="card-comentario-error">
				<?php
				echo $_SESSION['status']; // apresente ela
				unset($_SESSION['status']); //dps destrua 
				?>
			</div>
		<?php
		}
		?>
		<?php
		if (isset($_SESSION['status-cadastro'])) { //se existir a variavel

		?>
			<div class="card-comentario">
				<?php
				echo $_SESSION['status-cadastro']; // apresente ela
				unset($_SESSION['status-cadastro']); //dps destrua 
				?>
			</div>
		<?php
		}
		?>





		<div class="conteiner-login-margin">

			<div class="left-login">


				<form action="config.php" method="POST">

					<span class="login-tit">
						<h2>Cadastro</h2>
					</span>

					<span class="user-cadastro">Usuario:</span>
					<br>
					<input type="text" name="nomeCadastro" minlength="8" placeholder="usuario">
					<br>
					<span class="user-cadastro">Senha:</span>
					<br>

					<input type="password" name="senhaCadastro" minlength="4" placeholder="senha">
					<br>
					<br>
					<div class="marge-bt">
						<input class="button_cadastro" type="submit" value="cadastrar">
					</div>


				</form>
			</div>

			<div class="right-login">

				<form action="config_login.php" method="POST">
					<span class="login-tit">
						<h2>Login</h2>
					</span>
					<span class="user-login">Usuario:</span>
					<br>
					<input type="text" name="usuarioLogin" placeholder="usuario">
					<br>
					<span class="user-login">Senha:</span>
					<br>
					<input type="password" name="senhaLogin" placeholder="senha">
					<br>
					<br>
					<div class="marge-bt">
						<input class="button_cadastro" type="submit" value="entrar">
					</div>

				</form>
			</div>

		</div>

	</div>
	<footer>
		<div class="forter-controler-main">
			<div class="forter-controler">
				<div class="footer1">
					<img src="css/img/LOGO.png" class="icon-logo">
				</div>
				<div class="footer2">
					<div class="p1">
						<label><b>Quem somos</b></label>
						<br>
						<br>
						<a>Site desenvolvido para amantes de fórmula 1. Fiquei por dentro de notícias, estatísticas e entretenimento do mundo do automobilismo.</a>
					</div>
					<div class="p2">
						<a href="conteudo.php">Ranking</a>
					</div>
					<div class="p3">
						<a href="conteudo.php">Fale conosco</a>
					</div>
				</div>
				<div class="footer3">
					<div class="icon">
						<a href="#"><img src="css/img/logo github.png" class="icon-git"></a>
						<a href="#"><img src="css/img/LinkedIn_logo_initials.png" class="icon-link"></a>
					</div>
				</div>
			</div>
			<div class="direitos">
				<Label>© 2023 - 2023 - http://localhost/ranking_php/index.php - TODOS OS DIREITOS RESERVADOS.</Label>
			</div>
		</div>
	</footer>
	<?php
	// }
	?>
</body>

</html>