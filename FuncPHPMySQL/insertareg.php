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
<FORM method="post" ACTION="agregar.php">
<TABLE>
<TR>
<TD>Nombre:</TD>
<TD><INPUT TYPE="text" NAME="nombre" SIZE="20"
MAXLENGTH="30"></TD>
</TR>
<TR>
<TD>Direccion:</TD>
<TD><INPUT TYPE="text" NAME="direccion" SIZE="20"
MAXLENGTH="30"></TD>
</TR>
<TR>
<TD>Telefono:</TD>
<TD><INPUT TYPE="text" NAME="telefono" SIZE="20"
MAXLENGTH="30"></TD>
</TR>
<TR>
<TD>Email:</TD>
<TD><INPUT TYPE="text" NAME="email" SIZE="20"
MAXLENGTH="30"></TD>
</TR>
<TR>
<TD>Imagen:</TD>
<TD><INPUT TYPE="text" NAME="imagen" SIZE="20"
MAXLENGTH="30"></TD>
</TR>
</TABLE>
<INPUT TYPE="submit" NAME="accion" VALUE="Grabar">
</FORM>
<hr>
<?php
$nombre=$_POST[nombre];
$direccion=$_POST[direccion];
$telefono=$_POST[telefono];
$email=$_POST[email];
$imagen=$_POST[imagen];

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
</TR>
<?php
while($row = mysql_fetch_array($result)) {
printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp
;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;<img
src=%s>&nbsp;</td></tr>",
$row["nombre"],$row["direccion"],$row["telefono"],$row["email"],$row["imagen"]);
}
mysql_free_result($result);
?>
</table>
</body>
</html>
