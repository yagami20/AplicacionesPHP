<html>
<body bgcolor="#D2EBF7">
<?php
include("conec.php");
$link=conectarse();
$Sql="select * from tablacurso where nombre like '%$_POST[nombre]%'";
//echo $Sql;
$result=mysql_query($Sql,$link);
?>
<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
<TR>
<TD>&nbsp;Nombre</TD>
<TD>&nbsp;Dirección&nbsp;</TD>
<TD>&nbsp;Telefono&nbsp;</TD>
<TD>&nbsp;Email&nbsp;</TD>
<TD>&nbsp;Imagen&nbsp;</TD>
</TR>
<form name="form1" method="post" action="modifica.php">
<?php
while($row = mysql_fetch_array($result))
{
printf("
    <tr>
    <td><INPUT TYPE='text' NAME='nombre' SIZE='20'MAXLENGTH='30' value='%s'></td>
    <td>&nbsp;<INPUT TYPE='text'NAME='direccion' SIZE='20' MAXLENGTH='30'value='%s'>&nbsp;</td>
    <td>&nbsp;<INPUT TYPE='text'NAME='telefono' SIZE='20' MAXLENGTH='30'value='%s'>&nbsp;</td>
    <td>&nbsp;<INPUT TYPE='text'NAME='email' SIZE='20' MAXLENGTH='30'value='%s'>&nbsp;</td>
    <td>&nbsp;<INPUT TYPE='text'NAME='imagen' SIZE='20' MAXLENGTH='30'value='%s'>&nbsp;</td>
    </tr>",
$row["nombre"],$row["direccion"],$row["telefono"],$row["email"],$row["imagen"]);


}
mysql_free_result($result);
?>
</form>
</body>
</html>