<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: content-type");
	header("Access-Control-Allow-Methods: OPTIONS,GET,PUT,POST,DELETE");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Propuesta - Basaltex</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="./css/estilos.css">
	<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</head>
<body>

	<div class="page">
		<div class="header">
			<h1>Colores de bloque</h1>
			<div id="seleccionPadre">
				<input type="radio" class="seleccion" name="color" id="gris"> <label for="gris">Gris</label>
				<input type="radio" class="seleccion" name="color" id="negro"> <label for="negro">Negro</label>
				<input type="radio" class="seleccion" name="color" id="blanco"> <label for="blanco">Blanco</label>
			</div>
		</div>
		<div class="aside">
			<h2>Tipos</h2>
			<div id="grisOpciones" hidden>		
				<input class="seleccionBloque" name="bloque" type="radio" id="bloque-maquinado"> <label for="bloque-maquinado">Bloque maquinado</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="busardeada"> <label for="busardeada">Busardeada</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="cardeada"> <label for="cardeada">Cardeada</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="lavada"> <label for="lavada">Lavada</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="lisa"> <label for="lisa">Lisa</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="maquineado1"> <label for="maquineado1">Maquineado 1</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="maquineado2"> <label for="maquineado2">Maquineado 2</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="perreado1"> <label for="perreado1">Perreado 1</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="perreado2"> <label for="perreado2">Perreado 2</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="perreado-rustico"> <label for="perreado-rustico">Perreado rustico</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="pulido-brillante"> <label for="pulido-brillante">Pulido brillante</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="pulido-mate"> <label for="pulido-mate">Pulido mate</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="punzoneada"> <label for="punzoneada">Punzoneada</label><br>
			</div>
			<div id="negroOpciones" hidden>
				<input class="seleccionBloque" name="bloque" type="radio" id="negro1"> <label for="negro1">Negro 1</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="negro2"> <label for="negro2">Negro 2</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="negro3"> <label for="negro3">Negro 3</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="negro4"> <label for="negro4">Negro 4</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="negro5"> <label for="negro5">Negro 5</label><br>
			</div>
			<div id="blancoOpciones" hidden>
				<input class="seleccionBloque" name="bloque" type="radio" id="blanco1"> <label for="blanco1">Blanco 1</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="blanco2"> <label for="blanco2">Blanco 2</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="blanco3"> <label for="blanco3">Blanco 3</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="blanco4"> <label for="blanco4">Blanco 4</label><br>
				<input class="seleccionBloque" name="bloque" type="radio" id="blanco5"> <label for="blanco5">Blanco 5</label><br>
			</div>
		</div>
		<div class="content">
			<div id="load-content"></div>
		</div>
	</div>
	
	<script src="./js/index.js"></script>

</body>
</html>