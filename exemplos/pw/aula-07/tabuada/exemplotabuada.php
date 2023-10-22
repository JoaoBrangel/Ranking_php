<?php
	$tabuada = $_GET['tabuada'];
	$contador = 0;
	$resultado = 0;
	
	
	$tipo = $_GET['tipo'];
	if($tipo =="while"){
		while($contador <=10){
			
			$resultado = $tabuada * $contador;
			
			//2 X 0 = 0
			echo $tabuada . ' X ' . $contador . '='.$resultado .'<br/>';
			$contador +=1;
			
		}
	}
	
	if($tipo =="for"){
		echo "<br><br><br> Tabuada com FOR<br/>";
		
		
		for ($contador = 10;$contador>=0;$contador--){
			$resultado = $tabuada * $contador;
			echo $tabuada . ' X ' . $contador . '='.$resultado .'<br/>';
		}
	}
?>