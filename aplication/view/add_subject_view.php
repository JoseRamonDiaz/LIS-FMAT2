    <h1>
		Ingresa los datos de la materia
	</h1>
    <form method="post" action=<?php $appBase.'/subject/insertSubject'; ?>>
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre">
        <label for="semestre">Semestre: </label>
        <input type="text" id="semestre" name="semestre">
        <label for="obligatoria">Obligatoria: </label>
        <input type="checkbox" id="obligatoria" name="obligatoria">
        <label for="creditos">Créditos: </label>
        <input type="number" id="creditos" name="creditos">
        <label for="profesor">Profesor: </label>
        <select id="profesor" name="profesor">
            <option>Maestro</option>
        </select>
        <input type="submit" value="Enviar">
    </form>