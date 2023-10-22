
<html>
	<head>
<title>exercicio 01</title>
	</head>
		
		<body>

		<?php 
		
			$numeroinicial = (int)$_POST["numinicial"];
			$numerofinal = (int)$_POST["numfinal"];
			
			
			
			$i = 0;
			
				for ($i = $numeroinicial; $i <= $numerofinal ; $i ++){
					
						
					$cor = "";
					if ($i <= ($numeroinicial+$numerofinal)/2){
							$cor = "#19ba00";
					}
					else{
						$cor = "#fa1505";
					}
		?> <!--  fechando-->
		

		
			<p style="color:<?php  echo $cor;  ?>;">
				<?php 
					echo $i;
				?><!--  fechando-->
			</p>		
		
		<?php 
					
		}//fechament do for 
	
		
		?><!--  fechando-->
		
	
	
	
	
	</body>
</html>