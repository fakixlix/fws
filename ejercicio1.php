<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1 - Exámen FWS</title>
</head>
<body>

<?php 
	
	for ( $n = 1; $n <= 100; $n++ ) { 

		$medio = intval($n / 2);
		$esPrimo = true;		
		//echo "<div>".$i."</div>"; // muestro del 1 al 100. Comentar - Descomentar 

		if ( $n % 2 == 0 ) {

			echo ( dechex( $i )."\n" ); // muestro los pares en hexadecimal. Comentar - Descomentar

		}

		if ( $n % 4 == 0 ) {
			
			$aString = strval($n);

			$aString = strval("[4]"); // Comentar - Descomentar

			//echo $aString.": Es multiplo de 4"."<br>"; // Comentar - Descomentar

		}

		for ($i = 2; $i <= $medio; $i++) { 
			
			$resto = $n % $i;

			if ($resto == 0) {
				
				$esPrimo = false;
			}

		}

		if ($esPrimo == true) {
			//echo "<div style='color: red'>".$n." es primo"."<br>"."</div>"; // Comentar - Descomentar
		}else{

			//echo $n." no es primo"."<br>"; // Comentar - Descomentar
		}

	}

 ?>

</body>
</html>