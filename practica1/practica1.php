<?php
	echo "Mi primer programa en PHP";
	echo "<br><br>";

	echo "<h1 style='color:black;'>Lista de numeros</h1>";
	for ($i=0; $i <10; $i++) { 
		
		echo $i+1 . "<br>";
	}

	for ($i=0; $i < 60; $i++) { 
		if($i % 2 == 0){
			echo "<div style='border: 1px solid white; padding:30px; width:30px; display:inline-flex; background-color:red'>";
		}else{
		echo "<div style='border: 1px solid grey; padding:30px; width:30px; display:inline-flex; background-color:blue'>";
		}
		echo $i+1;
		echo "</div>";
	}
	echo "<h1>Nombre: Valenzuela García Diego Osvaldo</h1>";
?>