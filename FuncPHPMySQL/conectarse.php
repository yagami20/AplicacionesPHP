<!DOCTYPE html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>Ejemplo de PHP</title>
</head>
<body>
<?php
function conectarse()
{
if
(!($link=mysql_connect("172.30.140.10","web12","web12")))
{
echo "Error conectando a la base de datos.";
exit();
}
if (!mysql_select_db("web12",$link))
{
echo "Error seleccionando la base de datos.";
exit();
}
return $link;
}
conectarse();
echo "Conexión con la base de datos conseguida.<br>";
?>
</body>
</html>