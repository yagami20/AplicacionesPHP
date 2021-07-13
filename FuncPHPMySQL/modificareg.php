<!DOCTYPE html>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Modificacion</title>
    </head>
    <body bgcolor="#D2EBF7">
        <h1>Seleccionar registro a Modificar</h1>
        <?php
        include("conec.php");
        $link = conectarse();
        $Sql = "select * from tablacurso";
        $result = mysql_query($Sql, $link);
        ?>
        <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
            <TR>
                <TD>&nbsp;Nombre</TD>
                <TD>&nbsp;Direccion&nbsp;</TD>
                <TD>&nbsp;Telefono&nbsp;</TD>
                <TD>&nbsp;Email&nbsp;</TD>
                <TD>&nbsp;Imagen&nbsp;</TD>
            </TR>
            <?php
            while ($row = mysql_fetch_array($result)) {
                printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td>
                    <td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td>
                    <td><a href=\"actualiza.php?id=%d\">Modifica</a></td></tr>", $row["nombre"], $row["direccion"], $row["telefono"], $row["email"], $row["imagen"], $row["id"]);
            }
            mysql_free_result($result);
            ?>
    </body>
</html>
