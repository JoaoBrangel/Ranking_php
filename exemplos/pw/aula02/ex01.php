<html>

	<head>
			<title> Exercicio 1 PHP </title>
			<style> 
			
			body{
				
				background: <?php echo $_GET['corfundo'] . ";"; ?>
				
			}
			
			
			</style>
	</head>

	<body>
	
		<?php
			$numero1 = $_GET['vl01'];
			$numero2 = $_GET['vl02'];
			$soma = $numero1 + $numero2;
			
			/*
				Exibição de variavel dentro do texto com aspas dupla (técnica 01)
			echo "A soma entre $numero1";
			
				Exibição de variavel dentro do texto com aspas simples (técnica 02)
			echo 'A soma entre ' . $numero1 . 'e' . $numero2 . 'é:' . $soma; (concatenar)
			*/
			echo 'A soma entre ' . $numero1 . ' e ' . $numero2 . ' é: ' . $soma . '<br>';
			
			$sub = $numero1 - $numero2;
			
			echo " A subtração entre $numero1 e $numero2 é $sub.<br>";
			
			$div = $numero1 / $numero2;
			
			echo " A divisão entre $numero1 e $numero2 é $div.<br>";
			
				$mult = $numero1 * $numero2;
			
			echo " A multiplicação entre $numero1 e $numero2 é $mult.<br>";
			
			$rest = $numero2 % $numero1;
			
			echo " O resto da divisão entre $numero2 e $numero1 é $rest.";
		?>
		
	</body>

</html>