<?php
include("conec.php");
$link=conectarse();
$Sql="UPDATE tablacurso SET nombre='$_POST[nombre]',
direccion='$_POST[direccion]', email='$_POST[email]', telefono='$_POST[telefono]',
imagen='$_POST[imagen]' WHERE id = '$_POST[id]'";
mysql_query($Sql,$link);
header("Location: modificareg.php");
?>
