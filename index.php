<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Leonardo Villar</title>
	<link rel="stylesheet" href="Estilos/estilos.css">
</head>

<body>

	<?php
	//Mostrar Mensaje
	echo "¡Hola, Soy un Script de PHP! <br>";
	print "Hola mi primera clase";
	print( "<p>Esto es un parrafo</p>" );
	print( "<article>
            <h1 class='rufian'> Bienvenido</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nisi quibusdam ratione tempore voluptatibus. Aliquid commodi eos et expedita fugit minima quae quia quo velit voluptates. Amet iusto nostrum sint.</p>
        </article>" )
	?>

	<?php
	//Comentario de una linea
	/**
	 *comentario de varias lineas
	 *123
	 *456
	 *789
	 */
	?>

	<?php
	//Variables
	print( "<article class=articulo-final>" );
	$numero = 22;
	$nombre = "Leo";
	$valor = true;
	$pi = 3.1416;
	var_export( $pi );
	print( "Tu nombre es: " . $nombre . " y tienes: " . $numero );
	print( "</article>" );
	?>

	<?php
	//Definir Constante
	define( "minombre", "Leonardo" );
	define( "miapellido", "Villar" );
	echo( minombre . " " . miapellido );
	?>

	<?php
	//Crear Arrays
	$lenguajes = array( 'HTML', 'CSS', 'JS' );
	var_dump( $lenguajes );
	print( "<br>" );
	$lenguajes = [ 'Python', 'Java', 'Go', 'C++', 'JavaScript' ];
	var_dump( $lenguajes );
	print( "<br>" );
	
	?>

	<?php
	//Arrays Multidimensionales
	$cosas = [
		'animales' => [ 'gato', 'perro', 'pez' ],
		'colores' => [ 'azul', 'Amarillo', 'cafe' ],
		'ropa' => [ 'camisa', 'pantalon' ],
	];
	var_dump( $cosas );
	$animales = $cosas[ 'animales' ];
	var_dump( $animales );
	?>

	<?php
	//Casteo de Variables
	$polos = 4;
	var_dump( $polos );
	$polos = ( int )$polos;
	var_dump( $polos );
	print( "<br>" );
	?>

	<?php
	/** Operadores lógicos
	 * Devuelve true
	 * and --> Si todos son true
	 * &&  --> Si todos son true
	 * or  --> Si alguno es true
	 * ||  --> Si alguno es true
	 * !   --> Invierte el valor
	 * xor --> No todo es verdad
	 */
	?>

	<?php
	//Operador Nave Espacial
	$vale = 1 <=> 3;
	$vale = 3 <=> 3;
	//$vale = 3 <=> 1;
	echo( $vale );
	print( "<br>" );
	?>

	<?php
	//Operador Ternario
	$num = 10;
	$nomnum = ( $num == 10 ) ? 'Diez' : 'Otro numero';
	var_dump( $nomnum );
	?>

	<?php
	//Operados Fusion de Null
	$val = $num ?? 'Valor Nulo';
	?>
	
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
	print( $valor . " <br>" );
	?>

	<?php
	//Estructura condicion Switch
	$opcion = 3;
	switch ( $opcion ) {
		case 1:
			echo( "Activa Opcion 1" );
			break;
		case 2:
			echo( "Activa Opcion 2" );
			break;
		default:
			echo( "Activa Opcion 3" );
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
	
	<?php
	//foreach
	$numeros = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];
	foreach($numeros as $cuenta):
		echo("Numero : {$cuenta}");
	print( "<br>" );
	endforeach;
	?>
	
	<?php
	//Break y Continue
	$cuenta =0;
	while($cuenta<10){
		$cuenta++;
		if($cuenta==8){
			break;
		}
		if($cuenta % 2 == 0){
			continue;
		}
		print("Un numero impar{$cuenta} \n");
	}
	?>
	
	<?php
	//Funcion por Referencia
	function Suma( $a, $b ) {
		$suma = $a + $b;
		return ( $suma );
	}

	$resultado = Suma( 5, 12 );
	print( "<br>" );
	print( $resultado );
	?>

	<?php
	//funcion por Valor
	$ejemplo = 7;

	function incrementar( & $i ) {
		$i = $i + 1;
	}
	incrementar( $ejemplo );
	echo( $ejemplo . "<br>" );
	?>

	<?php
	include('funciones.php');
	print Sumas(5,6);
	?>


</body>

</html>