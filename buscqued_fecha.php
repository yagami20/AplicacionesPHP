<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<table> 
<tr>
<td><font color="#FFA07A"><h1>Producto
Electronicos</h1></font></td>
</tr>
</table>
<body bgcolor="#F0E68C" >
<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1 bordercolor="#A9A9F5">
<TR bgcolor="#9370DB">
<TD>&nbsp;Codigo&nbsp;</TD>
<TD>&nbsp;Nombre&nbsp;</TD>
<TD>&nbsp;Precio&nbsp;</TD>
<TD>&nbsp;Cantidad&nbsp;</TD>
<TD>&nbsp;Componentes&nbsp;</TD>
<TD>&nbsp;Tipo&nbsp;</TD>
<TD>&nbsp;Fecha&nbsp;</TD>
</TR>
<?php
include("conec1.php"); 
$link=Conectarse();

$Sql="select * from producto where fecha like '%$_POST[producto]%'";
$result=mysql_query($Sql,$link);

$i=0; 
while($arreglo = mysql_fetch_array($result))
{ printf("<tr >
<td>&nbsp;%d&nbsp;</td>
<td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%d&nbsp;</td>
<td>&nbsp;%s&nbsp;</td>
</tr>",
$arreglo["codigo"],
$arreglo["nombre"],
$arreglo["precio"],
$arreglo["cantidad"],
$arreglo["componentes"],
$arreglo["tipo"], 
$arreglo["fecha"]);
$i=$i+1;
} 
mysql_free_result($result);
if($i==0) 
{ printf("<font color='#FE2E64'><p><center><h3>DATOS NO
ENCONTRADOS</h3></center></font>");
}
printf("<font color='#FE2E64'>DATOS
ENCONTRADOS...</font>");
printf($i);
?>
</table>
</body>
</html>
