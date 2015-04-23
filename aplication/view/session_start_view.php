	<h1>
		Inicio de sesión
	</h1>
<form method="post" action=<?php echo $appBase.'/user_controller/login'; ?>>
        <label for="user">Usuario: </label>
        <input type="text" id="user" name="user">
        <label for="pass">Contraseña: </label>
        <input type="password" id="pass" name="pass">
        <input type="submit" value="Ingresar">
    </form>