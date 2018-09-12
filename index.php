<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Documento sin título</title>
</head>

<body>

	<?php
	//Estructura Condicional if - else if - else
	$nombre = "Leonardo";
	$sexo = "S";
	if ( $sexo == "M" ) {
		$valor = "Bienvenido, " . $nombre;
	} else if ( $sexo == "F" ) {
		$valor = "Bienvenida, " . $nombre;
	} else {
		$valor = "Incognito";
	}
	print( $valor . " <br>");
	?>
	
	
	<?php
	//Estructura condicion Switch
	$opcion=3;
	switch($opcion){
		case 1:
			echo("Activa Opcion 1");
			break;
		case 2:
			echo("Activa Opcion 2");
			break;
		default:
			echo("Activa Opcion 3");
			break;
	}
	?>
	
	<?php
	//Estructura Repititiva While
	$cont = 1;
	while ( $cont < 5 ) {
		print( "<br> Numero " . $cont );
		$cont++;
	}
	?>

	<?php
	//Estructura Repititiva DO - WHILE
	$cont = 1;
	do {
		print( "<br> Numero " . $cont );
		$cont++;
	} while ( $cont < 5 );
	?>

	<?php
	//Estructura repetitiva for
	for ( $contador = 1; $contador < 5; $contador++ ) {
		print( "<br> Numero " . $contador );
	}
	?>
	
	






</body>

</html>