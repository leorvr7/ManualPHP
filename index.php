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
	print( $valor );
	?>
	
	<?php
	//Estructura Repititiva While
	$cont=1;
	while($cont < 5 || $cont < 100){
	print("<br> Numero " . $cont);
		$cont++;
	}
	?>
	
	
</body>

</html>