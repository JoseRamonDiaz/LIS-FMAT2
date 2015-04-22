	<h1>
		Registrate en el sistema
	</h1>
    <form method="post" action=<?php $appBase.'/user/register'; ?>>
        <label for="name" >Nombre: </label>
        <input type="text" id="name" name="name" required>
         <label for="lastname" >Apellidos: </label>
        <input type="text" id="lastname" name="lastname" required>
         <label for="username" >Nombre de usuario: </label>
        <input type="text" id="username" name="username" required>
        <label for="password" >Contraseña: </label>
        <input type="password" id="password" name="password" required>
        <label for="email" >Correo: </label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Registrar">
    </form>