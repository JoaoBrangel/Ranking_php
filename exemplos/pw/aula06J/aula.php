
<html>
	<head>
<title>exercicio 01</title>
	</head>
		
	<body>
			<?php
				
				
				$i = 0;
				while($i <= 100){
					//$i ++;
					// $i +=1;
					$i = $i + 1;
				
								
					if(($i % 2) == 0){

						echo "$i PAR<br> ";
					}else{
						
					echo $i . " IMPAR <br>";
					}
					
					
				}
			?>
	</body>
</html>