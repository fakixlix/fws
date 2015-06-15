<?php 

	$r = rand(1, 10);
	$p = array('red', 'blue');
	$rColors = rand(0, 1);

	$alea = array_rand($p, 2);

	//echo $p[ $alea[$rColors] ]."<br>";

	$arrJSON = array('data' => [ 'number' => $r, 'color' => $p[ $alea[$rColors] ] ]);

	echo json_encode( $arrJSON );

?>