    <h1>
        Ingresa los datos del enlace
    </h1>
    <form method="post" action=<?php $appBase.'/link/addLink'; ?>>
        <label for="enlace">Enlace: </label>
        <input type="text" id="enlace" name="enlace">
        <?php
            echo "<input type='text' value='1' name='Materia_idMateria' hidden/>";
        ?>
        <input type="submit" value="Enviar">
    </form>