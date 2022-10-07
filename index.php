<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parcial Hospital</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

<br><br>
	<div id="cuerpo">
		
		<br><br>
		<h1>Sistema Hospital</h1>
		<br><br>

		<form action="registro.php" method="POST">

		<table align="center" id="tab1">
		<tr>
			
			<th>
				<input type="button" id="opcion1" value="Registrar" 
				onclick="javascript:opcion1();" >	
			</th>
			<th>
				<input type="button" id="opcion2" value="Opción 2" 
				onclick="javascript:opcion2();" >
			</th>
			<th>
				<input type="button" id="opcion3" value="Opción 3" 
				onclick="javascript:opcion3();" >	
			</th>

		</tr>
		</table>
		<br>
		<br>
		<table align="center">
		<tr>
			<th><div><label for="campo1">Nombre:</label>
				<input type="text" id="campo1" size="25"></div></th>
		
			<th><div><label for="campo2">Edad  :</label>
				<input type="text" id="campo2" size="25"></div></th>
		</tr>

		<tr>

			<th><div><label for="campo3">Cédula:</label>
				<input type="text" id="campo3" size="25"></div></th>
			<th><div>
				<label for="campo4">Núm de citas:</label>
				<input type="text" id="campo4" size="25">	
				</div></th>
		</tr>
		</form>
	</table>
	</div>

</body>
</html>