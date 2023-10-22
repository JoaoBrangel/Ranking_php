
<html>
	<head>
<title>exercicio 01</title>
	</head>
		
	<body>
	
	
			<?php
				
				
				$i = 0;
				$resultado = 7;
				$valor = $_POST['valor'];
				$op = $_POST['op'];
				
				if($op == "t"){
					for($i=0; $i <=10; $i ++){
							$resultado = $i * $valor;
							echo "$valor X $i = $resultado <br>";
							//5! = 5*4*3*2*1
					}
				}
				
				
				if($op == "f"){
					echo "<br><br><br>FATORIAL<br><br><br>";
					$fatorial = 5;
					$contador = $fatorial;
					
					while($contador <= 5){
						$resultado = $resultado * $contador;
						$contador = $contador -1;
					}
					echo $resultado;
				}
			?>
	</body>
</html>