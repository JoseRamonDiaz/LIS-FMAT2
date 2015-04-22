<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla2.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<link rel="stylesheet" href="/LIS-FMAT2/public/css/main2.css" type="text/css" />
	<title>LIS FMAT</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="wrap">
        <?php Module::run('header') ?>
    <div class="wrap">
		<div id="left">
    <!-- InstanceBeginEditable name="EditRegion" -->
    <?php
        echo $content;
    ?>
            <!-- InstanceEndEditable -->
    </div>
    <div id="right">
     <!-- InstanceBeginEditable name="EditRegion1" -->
        <?php Module::run('barralado') ?>
        <!-- InstanceEndEditable -->
    </div>
    
    
        <?php Module::run('footer') ?>
        </div>
</body>
<!-- InstanceEnd --></html>
