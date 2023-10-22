<html>
	<head>
		
	</head>
	<body>
		<?php
error_reporting(0);		
			// "declaração" de variáveis
			$nome = "";
			$tamanho = "";
			$preco = 0;
			$ln = "";//leite ninho
			$lc = "";//leite condensado
			$con = "";//confete
			$pacoca = "";//paçoca
			
			//recebimento dos dados do formulário. $_GET, pois o formulário está com method="get"
			$nome = $_GET['nome'];
			$tamanho = $_GET['tamanho'];
			$ln = $_GET['ln'];
			$lc = $_GET['lc'];
			$con = $_GET['con'];
			$pacoca = $_GET['pacoca'];
			//função strtoupper para converter a variável nome em maiúsculo.
			//$nome RECEBE o resultado da função strtoupper com o parâmetro $nome.
			$nome = strtoupper($nome);
			//exibir na tela a primeira frase, mostrando o nome do cliente.
			echo "O açai de $nome é do tamanho: ";
			// estrutura Switch (Case) testando a variável tamanho, com o objetivo de descobrir o tamanho do copo
			//mostrará na tela o tamanho escolhido e preco receberá o valor do copo.
			switch($tamanho){
				case "p":
					echo " PEQUENO";
					$preco = 10;
				break;
				case "m":
					echo " MÉDIO";
					$preco = 15;
				break;
				case "g":
					echo " GRANDE";
					$preco = 20;
				break;
			}
			//aviso na tela que serão exibidos os itens opcionais
			echo "<br/> Contém:<br/>";
			
			//testes INDIVIDUAIS para cada checkbo, verificando se o value é 's'. Lembra? só é necessário incluir
			//no value de cada checkbox uma informação que seja fácil de ser testada, pois só queremos saber se ele
			//foi marcado ou não.
			//desta vez, preço RECEBE ele mesmo somando o valor do opcional. Isto se faz necessário pois se não
			//a linguagem de programação faria a substituição do valor.
			//uma alternativa possível para "$preco = $preco +3;" seria "$preco += 3".
			//o operador recebe "=", com um operador aritmético precedendo ele, considera que está sendo feito
			//um incremento.
			if($ln =="s"){
				echo "- LEITE NINHO <br/>";
				$preco = $preco + 3;
			}
			if($lc =="s"){
				echo "- LEITE CONDENÇADO <br/>";
				$preco = $preco + 3.5;
			}
			if($con =="s"){
				echo "- CONFETE <br/>";
				$preco = $preco + 2.5;
			}
			if($pacoca =="s"){
				echo "- PAÇOCA <br/>";
				$preco = $preco + 1.5;
			}
			//para finalizar, exibiremos o preço final.
			echo "<br/> E custou R$ $preco";
		?>
	</body>
</html>