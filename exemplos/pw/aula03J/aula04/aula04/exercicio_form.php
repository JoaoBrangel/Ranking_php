<html>
	<head>
		
	</head>
	<body>
		<form action="exercicio_proc.php" method="get">
			<?php
				//campo text para o nome do cliente
			?>
			<label for="nome">Nome:</label>
			
			<input type="text" name="nome" required /><br>
			<hr/>
			Copo:
			<br/>
			<?php
				//campos radio, para o tamanho do açai.
				//o segredo para o correto funcionamento é todos os radios terem o mesmo name, porém com values
				//diferentes. O value será o parâmetro enviado para a página de processamento, que será testado.
				//não precisa ser o preço, e sim algo que possa ajudar na hora de testar.
				//para este exercício, adotei as letras p,m, e g, insinuando "pequeno", "médio" e "grande".
			?>
			<input type="radio" id="t1" name="tamanho" value="p"/>
			<label for="t1" >Pequeno </label><br>
			
			<input type="radio" id="t2" name="tamanho" value="m"/>
			<label for="t2" >Médio </label><br>
			
			<input type="radio" id="t3" name="tamanho" value="g"/>
			<label for="t3">Grande:</label><br>
			<hr>
			Condimentos:<br>
			<?php
				// Os checkbox são o inverso do radio, são concebidos para marcação de coisas "opcionais".
				// O segredo para um bom teste de checkbox é todos terem nomes diferentes, pois serão testados individualmente
				// Além disto é interessante que o value receba algo "fácil de testar", pois você só precisa saber se ele foi ou não marcado.
			?>
			<label>Leite ninho </label>
			<input type="checkbox" name="ln" value="s"><br/>
			<label>Leite condensado </label>
			<input type="checkbox" name="lc" value="s"><br/>
			<label>Confete </label>
			<input type="checkbox" name="con" value="s"><br/>
			<label>Paçoca </label>
			<input type="checkbox" name="pacoca" value="s"><br/>
			<input type="submit" value="enviar"/>
		</form>
	</body>
</html>