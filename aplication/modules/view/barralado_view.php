	<h2>Materias</h2>
	<ul>
		<?php 
			$controller = new indexcontroller();

			$subjects = $controller->getSubjects();
		 ?>

		 <?php foreach ($subjects as $subject): ?>
				<li><a href=<?php echo 'subjectInfoView/'.$subject['idMateria']?>><?php echo $subject['NombreMateria'] ?></a></li>
	     <?php endforeach ?>
	</ul>