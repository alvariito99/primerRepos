<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		Aleatorio
	</title>
</head>
<body>
	 <h1>Práctica A03 - Aleatoriedad</h1>
    
    <p>Nombre del alumno: Álvaro Barrios Dominguez</p>
    <p>Módulo: HLC </p>
    <p>Año: 2024</p>
    
    <p>Número aleatorio entre 1 y 100: 
        <?php
           
            echo rand(1, 100);
        ?>
    </p>

    <p>Fecha y hora actual del servidor: 
        <?php
            // Muestra la fecha y hora actual del servidor
            echo date('d-m-Y H:i:s');
        ?>
    </p>
</body>
</html>