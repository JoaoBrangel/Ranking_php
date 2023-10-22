
<html>
	<head>
<title>exercicio 01</title>
	</head>
		
	<body>
			<?php
				
				$numero = $_POST["conta"];
				$resultado = 0;
				$i = 0;
				for ($i = 0 ; $i <= 10 ; $i++){
					$resultado = $i * $numero;
					
					echo ($numero . "X" . $i ." = ". $resultado . "<br>");
					
				}
			
			?>
	</body>
</html>