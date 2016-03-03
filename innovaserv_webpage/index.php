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
				<!--<div id="menuItem"><a href="contact.php">Contacto</a></div>-->
            </div>
            <div id="baseLayoutBody">
                <p>INNoVaServ Toolkit, una plataforma tecnológica para ofrecer soporte a Empresas e Instituciones en la creación y diseño Modelos de Negocio asistidos por computador.</p>
                <img style="margin-left:10px" src="./images/innovaserv_editors.jpg">
				<hr style="background-color:red; height:6px">
				<p style="align:center"><span style="font-size:18px; font-weight:bold; ">Update Site INNoVaServ Toolkit v0.0.1.a(Solo plug-ins)</b></span><p>
				<hr style="background-color:red; height:6px">
				<p>URL:</p>
				<p><b><span style="font-size:18px;color:navy; margin-left:20px"> http://www.kybele.es/innovaserv/updatesite </b></span></p>
				<p>Requisitos:</p>
				<p>
					<ul>
						<li>Tener instalado los plug-ins de GMF Tooling SDK</li>
					</ul>
				</p>
				<br /><br />
				<hr style="background-color:red; height:6px">
				<p><span style="font-size:18px; font-weight:bold;">Eclipse + INNoVaServ Toolkit Plug-ins (Windows)</b></span><p>
				<hr style="background-color:red; height:6px">
                <p>Requisitos para Windows (7 o posterior):</p>
                <p>
					<ul>
						<li>Windows JRE (Java Runtime Environment) x64. Puede descargarlo del siguiente <a href="downloads/jre-8u71-windows-x64.exe">enlace.</a> </li>
					</ul>
				</p>
                <div id="downloadButton"><a href="download.php">Descargar<br>INNoVaServ Toolkit!<br>para Windows</a></div> 				
                <br /><br /><br /><br /><br /><br /><br />
				<hr style="background-color:red; height:6px">
				<p><span style="font-size:18px; font-weight:bold;">Eclipse + INNoVaServ Toolkit Plug-ins (Mac OS)</b></span><p>
				<hr style="background-color:red; height:6px">				
				<p>Requisitos para Mac OS:</p>
                <p>
					<ul>
						<li>Mac OS JRE (Java Runtime Environment) x64. Puede descargarlo del siguiente <a href="downloads/jre-8u71-macosx-x64.dmg">enlace.</a> </li>
					</ul>
				</p>
				<div id="downloadButton"><a href="download2.php">Descargar<br>INNoVaServ Toolkit!<br>para Mac OS</a></div> 
				<br><br><br><br><br>
				<p>¿Problemas con la instalación de MAC? Vea la sección <a href="install.php">Instalación FAQ</a></p>
					
                <p>Release: v0.0.1.a. Date: 18/11/2015<br>Downloads: [ <?php echo $files; ?> ]</p>
            </div>
        </div>
    </body>
</html>	
