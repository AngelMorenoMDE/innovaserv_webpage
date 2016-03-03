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
				<div id="menuItem"><a href="contact.php">Contacto</a></div>
            </div>
            <div id="baseLayoutBody">
                <p><img style="width:150px; height:150px" src="./images/profile/profile.jpg" /></p>
            </div>
        </div>
    </body>
</html>	
