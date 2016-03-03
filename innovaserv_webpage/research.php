<?php

    $dir = opendir('./counter');
    $i = 0;
    $files = 0;

    while (false !== ($file = readdir($dir))) 
    { 
        if (!in_array($file, ['.', '..']) and !is_dir($file)) 
	{
            $files++;
	}
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
                <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <div id="baseLayout">
            <div id="baseLayoutHead">
                <div id="baseLayoutHeadLogo"><img id="baseLayoutHeadLogoImg" src="./images/innovaserv_logo.jpg"></div>

            </div>
            <div id="baseLayoutUpMenu">
                <div id="menuItem"><a href="index.php">Inicio</a></div>
				<div id="menuItem"><a href="install.php">Instalación FAQ</a></div>
				<div id="menuItem"><a href="research.php">Publicaciones</a></div>
            </div>
            <div id="baseLayoutBody">
				<hr style="background-color:red; height:6px">
				<p><span style="font-size:18px; font-weight:bold;">Publicaciones</b></span><p>
				<hr style="background-color:red; height:6px">			
			<!--<embed src="http://www.kybele.es/innovaserv/data/icbs2015.pdf" height="580" type='application/pdf' style="width:100%">-->
				<p><a href="http://www.kybele.es/innovaserv/data/icbs2015.pdf">International Conference in Business Servitization (Madrid, 2015)</a></p>
				
				<div style="height:30px; width:100%"></div>
				<hr style="background-color:red; height:6px">
				<p><span style="font-size:18px; font-weight:bold;">Otras herramientas</b></span><p>
				<hr style="background-color:red; height:6px">				
				<p><a href="http://www.slideshare.net/apolaine/blueprint-developing-a-tool-for-service-design">Blueprint+: Developing a Tool for Service Design</a></p>
				<p><a href="https://canvanizer.com/canvas/service-blueprint-demo-canvas">Service Blueprint Canvas</a></p>
				<p><a href="https://next.canvanizer.com/sneak-preview/canvas/">Canvanizer 2.0</a></p>

            </div>
        </div>
    </body>
</html>	
