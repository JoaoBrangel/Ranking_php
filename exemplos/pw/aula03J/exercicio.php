<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="exercicio.php" method="POST">
	<label>Monte o seu açai</label>
	<br>
	<label>Digite o seu nome</label>
	<input type="text" name="nome">
	<input type="submit" value="enviar">
	
	
	
</form>

<?php//struppercase
	
		$nome1 = $_POST['nome'];
		
		
		
		echo"O açai  de $nome1";


?>
    <br>
	<br>
	<label>Escolha seu copo</label>
	<br>
	<input type="radio" name="copo" value="1">Pequeno
	<br>
	<input type="radio" name="copo" value="2">Médio
	<br>
	<input type="radio" name="copo" value="3">Grande
	
	<br>
	<br>
	<label>Escolha o complemento</label>
	<br>
	<input type="checkbox" name="complemento" value="1">Leite ninho
	<br>
	<input type="checkbox" name="complemento2" value="1">Leite condensado
	<br>
	<input type="checkbox" name="complemento3" value="1">Confete
	<br>
	<input type="checkbox" name="complemento4" value="1">Paçoca
	<br>
	
	
	
	
	
	
	
	$copo = $_GET['copo'];
			switch($copo){
				case 1:
				$copo = 10;
				break;
				case 2:
				$copo = 15;
				break;
				case 3:
				$copo = 20;
				break;
				
			}
		
		$complemento = $_GET['complemento'];
			
		
		$valor;
</body>
</html>