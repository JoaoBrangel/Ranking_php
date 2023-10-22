<html lang="pt-br">
<head>
    
    <title>Document</title>
</head>
<body>    
<?PHP
		/*verificar o nome do mes de acoerdo com nuemro digitado
		a partir do segundo semestre,
		exibir o trimestre do mes
		os meses de janeiro e dezembro sao considerados feiras
		*/
		//error_reporting(0); desabilita erros
		// isset() verifica se o a variavel esta consifurada
		if(isset($_POST['numero'])){
		$mes = $_POST['numero'];
		
		switch($mes){
			case 2:
			echo"<b>Fevereiro</b>";
			break;
				case 3:
					echo"<b>Março</b>";
				break;
				case 4:
					echo"<b>Abril</b>";
				break;
				case 5:
					echo"<b>Maio</b>";
				break;
				case 6:
					echo"<b>Junho</b>";
				break;
				break;
				case 7:
				case 8:
				case 9:
					echo"<b>3° Trimestre</b>";
				break;
				case 10:
				case 11:
					echo "<b>4° Trimestre</b>";
				break;
				case 1:
				case 12:
					echo"<b>Férias</b>";
			break;				
		}
		}
	?>
	
	<form  action="switch.php" method="POST">
		<label for="vl01">digite o número</label>
		<input type="number" name="numero" value="0">
		
		<input type="submit" value="Enviar">
	
	</form>

</body>
</html>

