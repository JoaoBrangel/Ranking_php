
<html>
	<head>
		<title>exercicio 01</title>
		
	</head>
	<body>
	
	
	<?php
	
		$usuario = $_POST['usuario'];
		$usuario = strtolower($usuario);
		
		$senha = $_POST['senha'];


		if($usuario == "joao" && $senha == "1234"){
			echo"autorizado";
		}else{
			echo"vc errou";
		}


	?>
	


	</body>
</html>