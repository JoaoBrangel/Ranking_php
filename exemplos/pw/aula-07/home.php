<html>
<head>
	<Style>
		div{
			margin:0px auto;
			width:30%;
			background:#5991eb;
			border-radius:10px;		
		}
		body{
			text-align:center;
		}
	</Style>
</head>
<body>

		
		

		<div>
			<?php
				session_start();
				
				if(isset($_SESSION['logado']) && $_SESSION['logado'] == "s"){
						//se a sessão existir e conter o valor de "s"
						echo"Olá", $_SESSION["usuario"], "<br>";
						echo"<a href='tabuada/exemplotabuada_form.php'>Ver tabuada</a><br>";
						echo"<a href='logout.php'>Desconectar</a>";
						}else{
					//se a sessão não existir ou o valo rdela nao for "s"
					echo"Session não definida <br>";
					
						if(isset($_SESSION["erro"]) && $_SESSION["erro"] !="" ){
							
							echo $_SESSION["erro"]."<br>";
						}
						
					?>
					<form action="login.php" method="POST">
			
				<label>Usuario:</label>
					<br>
				<input type="text" name="usuario" placeholder="usuario">
					<br>
				<label>Senha:</label>
					<br>
				<input type="password" name="senha"  placeholder="senha">
					<br>
				<input type="submit" value="enviar">
				
			</form>
			
			<?php
				}
			?>
			
			
		</div>
</body>
</html>