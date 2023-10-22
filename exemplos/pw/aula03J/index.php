<html>
	<head>
		<title>exercicio 01</title>
		<style>
			body{
				background:<?php echo $_GET['corfundo'] . ";"?>;
				
			}
		</style>
	</head>
	<body>
	

		<?php
		
			$numero1 = $_GET['vl01'];
			$numero2 = $_GET['2vl02'];
			
			$soma = $numero1 + $numero2;
			/*
				exibição da variavel dentro do texto
				echo "A soma entre $soma;
			*/
				echo'A soma entre o numero ' . $numero1 . ' e o numero ' . $numero2 . ' é igual a '. $soma . '<br>';
				
				
			$sub = $numero1	- $numero2;
			
				echo"<br>A subtração entre $numero1   e  $numero2 é <b>$sub</b>";
				
			$div = $numero1 / $numero2;
			echo "<br>A divisão entre $numero2 e $numero2 é <b> $div</b>";
			
			$mult = $numero1 * $numero2;
			echo "<br>A multiplicação entre $numero2 e $numero2 é <b> $mult</b>";
			
			$rest = $numero2 % $numero1;
			echo "<br>O resto da divisão entre $numero2 e $numero1 é <b> $rest</b>";
			
			//action é pra onde a informação vai
			// get envia com barra de endereco exemplo compartilha com o parça
			//post é pra pegar 
			echo""
			
			?>
	</body>
</html>