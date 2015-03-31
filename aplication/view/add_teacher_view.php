<?php
include 'aplication/config/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Agregar maestro</title>
</head>
<body>
	<h1>
		Ingresa los datos del maestro
	</h1>
    <form method="post" action=<?php echo 'http://'.$config['base_url'].'/teacher/insertTeacher'; ?>>
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre">
        <label for="apellidos">Apellidos: </label>
        <input type="text" id="apellidos" name="apellidos">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

