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
<body bgcolor="#D2EBF7">
<H1>Ejemplo de uso de bases de datos con PHP y MySQL</H1>
<?php
include("conec.php");
$link=conectarse();
$result=mysql_query("select * from tablacurso",$link);
?>
<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
<TR>
<TD>&nbsp;Nombre</TD>
<TD>&nbsp;Dirección&nbsp;</TD>
<TD>&nbsp;Telefono&nbsp;</TD>
<TD>&nbsp;Email&nbsp;</TD>
<TD>&nbsp;Imagen&nbsp;</TD>
<TD>&nbsp;Borra&nbsp;</TD>
</TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("
    <tr>
    <td>&nbsp;%s</td>
    <td>&nbsp;%s&nbsp;</td>
    <td>&nbsp;%s&nbsp;</td>
    <td>&nbsp;%s&nbsp;</td>
    <td>&nbsp;%s&nbsp;</td>
    <td><a href=\"borra.php?id=%d\"><img src='http://www.ite.educacion.es/formacion/materiales/137/cd/m6_1_smart/13.jpg'></a></td>
    </tr>",$row["nombre"],$row["direccion"],$row["telefono"],$row["email"],$row["imagen"],$row["id"]);
}
mysql_free_result($result);
?>
</table>
</body>
</html>