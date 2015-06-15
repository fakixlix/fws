<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2 - Exámen FWS</title>
</head>
<body>

	<?php 

		//$url = "https://recursos-data.buenosaires.gob.ar/ckan2/ecobici/estado-ecobici.xml";
		$xml = simplexml_load_file('https://recursos-data.buenosaires.gob.ar/ckan2/ecobici/estado-ecobici.xml');

		/*print_r($xml);

		$ns = $xml->getNamespaces(true);

		$name = $xml->getName();

		print_r($ns);*/

		print_r($xml->Estaciones);

		/*var_dump($xml);
		var_dump($xml->BicicletasWSResponse);
		var_dump($xml->BicicletasWSResult);*/
		///var_dump($xml->Estacion->attributes());

		//$sxl = new SimpleXMLElement($url, 0, true);

	 ?>

</body>
</html>