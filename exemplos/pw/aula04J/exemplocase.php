<html>
	<head>
	</head>
	<body>
		<?php
			/* 	-verificar o nome do mês de acordo com o 
				número digitado.
				-a partir do segundo semestre, exibir
				o trimestre do mês
				-os meses de Janeiro e Dezembro são
				considerados férias 
			*/
			//error_reporting(0); //desabilita erros
			//isset() -> Verifica se a variável está configurada
			if(  isset($_POST['m'])  ){
				$mes = $_POST['m'];
				switch($mes){
					case 2 :
						echo "Fevereiro";
					break;
					case 3 :
						echo "Março";
					break;
					case 4 :
						echo "Abril";
					break;
					case 5 :
						echo "Maio";
					break;
					case 6 :
						echo "Junho";
					break;
					case 7:
					case 8:
					case 9:
						echo "3º Trimestre";
					break;
					case 10:
					case 11:
						echo "4º Trimestre";
					break;
					case 1:
					case 12:
						echo "<b>Férias!!!!!</b>";
					break;
				}
			}
		?>
		<form action="exemplocase.php" method="POST">
			<label>Digite o número do mês</label>
			<!-- <input type="number" name="m" value="0" > -->
			<select name="m">
				<option value="1">Mês 01</option>
				<option value="2">Mês 02</option>
				<option value="3">Mês 03</option>
				<option value="4">Mês 04</option>
				<option value="5">Mês 05</option>
				<option value="6">Mês 06</option>
				<option value="7">Mês 07</option>
				<option value="8">Mês 08</option>
				<option value="9">Mês 09</option>
				<option value="10">Mês 10</option>
				<option value="11">Mês 11</option>
				<option value="12">Mês 12</option>
			</select>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>