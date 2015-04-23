	<h1>
		Ingresa los datos del maestro
	</h1>
    <form method="post" action=<?php echo $appBase.'/teacher/insertTeacher'; ?>>
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre">
        <label for="apellidos">Apellidos: </label>
        <input type="text" id="apellidos" name="apellidos">
        <input type="submit" value="Enviar">
    </form>