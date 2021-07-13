<?php
include("conec.php");
$link=conectarse();
$id=$_GET["id"];
mysql_query("delete from tablacurso where id = $id",$link);
header("Location: eliminareg.php");
?>