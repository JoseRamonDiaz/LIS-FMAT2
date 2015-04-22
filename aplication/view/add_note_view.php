<h2>Llena los datos del material</h2>
            <p>
                <form action=<?php $appBase.'/note/addNote'; ?> method="post" enctype="multipart/form-data">
                <input type="radio" name="tipo" value="tarea">Tarea</input>
                <input type="radio" name="tipo" value="examen">Examen</input>
                <?php
                
                //echo "<input type='text' value='$idMaestro' name='idMaestro' hidden/>";
                //echo "<input type='text' value='$idMateria' name='idMateria' hidden/>";
                
                echo "<input type='text' value='1' name='idMaestro' hidden/>";
                echo "<input type='text' value='1' name='idMateria' hidden/>";
                ?>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre"></input>
                <label for="descripcion">Descripción: </label>
                <input type="text" id="descripcion" name="descripcion"></input>
                <label for="archivo">Archivo: </label>
                <input type="file" name="archivo"></input>
                <input type="submit"></input>
            </form>
                
            </p>
            <!-- InstanceEndEditable -->
    </div>