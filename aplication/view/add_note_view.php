<?php
include 'aplication/config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<link rel="stylesheet" href="/LIS-FMAT2/public/css/main.css" type="text/css" />
	<title>LIS FMAT</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="wrap">
		<?php //include('header.php'); ?>
    <div class="wrap">
		<div id="left">
    <!-- InstanceBeginEditable name="EditRegion" -->
    <h2>Llena los datos del material</h2>
            <p>
                <form action=<?php echo 'http://'.$config['base_url'].'/CHello/add_note_controller'; ?> method="post" enctype="multipart/form-data">
                <input type="radio" name="tipo" value="tarea">Tarea</input>
                <input type="radio" name="tipo" value="examen">Examen</input>
                <?php
                
                //echo "<input type='text' value='$idMaestro' name='idMaestro' hidden/>";
                //echo "<input type='text' value='$idMateria' name='idMateria' hidden/>";
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
    <div id="right">
     <!-- InstanceBeginEditable name="EditRegion1" -->
        <?php //include('barralado.php'); ?>
        <!-- InstanceEndEditable -->
    </div>
    
    
        <?php //include('footer.php'); ?>
        </div>
</body>
</html>






<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

