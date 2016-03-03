<?php
//$demeter = 'http://www.kybele.es/innovaserv/downloads/innovaserv_toolkit.zip';
$file = fopen("counter/".time().".txt", "w");
fclose($file);
$fichero = 'http://dafne.escet.urjc.es/innovaserv/innovaserv_toolkit_mac.zip';
header("Location: ".$fichero);
//header("Location: innovaserv_toolkit_mac.zip");

/*
if (file_exists($fichero)) 
{
    header('Content-Description: Descarga INNoVaServ Toolkit');
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="'.basename($fichero).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($fichero));
    readfile($fichero);
    exit;
}
else
{
	echo "File Not Found!";
}*/
?>