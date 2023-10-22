
<html>
	<head>
<title>exercicio 01</title>
	</head>
		
	<body>
	
	<form action="tabuada.php" method="POST">
	
		<label>
			Digite o valor:
		</label>
		
		<input type="number" name="valor" min="1" max="25">
		<br>
		<hr>
		<label>
			selecione a operação
		</label>
		<br>
		<label for="tab">
			tabuada
		</label>
		<input type="radio" name="op" value="t" id="tab"> 
		<br>
		
		<label for="fat">
			fatorial
		</label>
		<input type="radio" name="op" value="f" id="fat"> 
		<br>
		<input type="submit" value="enviar">
		
	</form>
			<?php
				
			
			?>
	</body>
</html>