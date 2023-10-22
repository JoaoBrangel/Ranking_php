
<html>
	<head>
		<title>exercicio 01</title>
		
		
		<?php 
		$nota1 = 7;
		$nota2 = 4.5;
		$resultado = "";
		$cor="";
		$media = ($nota1 + $nota2) / 2;
		
		if($media < 6){
			$resultado = "reporvado";
			$cor="red";
		}else{
			if($media >=6 && $media < 7 ){
				$resultado = "Exame";
				$cor="yellow";
			}$resultado = "aprovado";
			$cor="green";
		}
		?>
		
		<style>
			body{
			background:<?php echo $cor . ";"?>;
				
			}
		</style>
	</head>
	<body>
	
		<?php
			echo $resultado
		?>
	</body>
</html>