<?php
include 'aplication/config/config.php';
?>
	<h1>
		Inicio de sesión
	</h1>
<form method="post" action=<?php echo 'http://'.$config['base_url'].'/user_controller/login'; ?>>
        <label for="user">Usuario: </label>
        <input type="text" id="user" name="user">
        <label for="pass">Contraseña: </label>
        <input type="text" id="pass" name="pass">
        <input type="submit" value="Ingresar">
    </form>