<?php
$basezip = basename("./archivos.zip");

    header( "Content-Type: application/octet-stream");
    header( "Content-Length: ".filesize("archivos.zip"));
    header( "Content-Disposition: attachment; filename=".$basezip."");
    readfile("archivos.zip");

?>