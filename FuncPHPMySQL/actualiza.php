<!DOCTYPE html>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body bgcolor="#D2EBF7">
        <h1>Modificacion de los Datos</h1>
        <?php
        // put your code here
        include("conec.php");
        $link = conectarse();
        $Sql = "select * from tablacurso where id='$_GET[id]'";
        $result = mysql_query($Sql, $link);
        while ($row = mysql_fetch_array($result)) {
            printf("<form action='modifica.php' method='post'>
                Nombres:
                <input type='text' value='$row[nombre]' name='nombre'><br>
                Direccion: 
                <input type='text' value='$row[direccion]' name='direccion'><br>
                Telefono:
                <input type='text' value='$row[telefono]' name='telefono'><br>
                Email:
                <input type='text' value='$row[email]' name='email'><br>
                Imagen    
                <input type='text' value='$row[imagen]' name='imagen'><br>
                <input type='hidden' value='$row[id]' name='id'><br>
                <input type='submit' value='Guardar'> </form>");
        }
        mysql_free_result($result);
        ?>
    </body>
</html>
