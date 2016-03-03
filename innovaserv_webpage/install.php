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
				<p><b><u>Notas de instalación para Mac OS</b></u></p>
				<p>Si al descomprimir <b>"eclipse_innovaser_mac.zip"</b> no puede ejecutar <b>"EclipseINNoVaServ.app"</b> porque le aparece un
				mensaje como el siguiente, deberá realizar los pasos que se enumeran a continuación</p>
				<p><a href="images/mac_help/mac_paso0.jpg"><img style="width:400px" src="images/mac_help/mac_paso0.jpg"></a></p>
                <p><b>Notas de instalación para MAC:</b></p>
				<p >
					En caso de <u>NO</u> poder ejecutar INNoVaServ Toolkit para MAC, debe<br>
								<ol style="margin-left:5%; width:80%;">
									<li>Acceder a <b><i>"Preferencias del Sistema > Seguridad y privacidad > General"</b></i><br><br>
									<a href="images/mac_help/mac_paso1.jpg"><img style="width:400px" src="images/mac_help/mac_paso1.jpg"></a></li><br>
									<li>Hacer click sobre el candado para poder realizar cambios de administración<br><br>
									<a href="images/mac_help/mac_paso2.jpg"><img style="width:400px" src="images/mac_help/mac_paso2.jpg"></a></li><br>
									<li>En <b><i>"Permitir aplicaciones descargadas de"</b></i> activar la opción <b>"Cualquier Sitio"</b>, para que Mac OS permita la ejecución de aplicaciones descargadas de sitios de
					internet no firmados digitalmente, como es el caso de http://www.kybele.es/innovaserv<br><br><a href="images/mac_help/mac_paso3.jpg"><img style="width:400px" src="images/mac_help/mac_paso3.jpg"></a></li>
								</ol>

				</p>
					
                <p>Release: v0.0.1.a. Date: 18/11/2015<br>Downloads: [ <?php echo $files; ?> ]</p>
            </div>
        </div>
    </body>
</html>	
