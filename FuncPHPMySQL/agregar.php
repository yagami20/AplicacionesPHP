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
$nombre=$_POST[nombre];
$direccion=$_POST[direccion];
$telefono=$_POST[telefono];
$email=$_POST[email];
$imagen=$_POST[imagen];

 
 include("conec.php");
$link=conectarse();
$Sql="insert into tablacurso
(nombre,direccion,telefono,email,imagen) values
('$nombre','$direccion','$telefono','$email','$imagen')";
mysql_query($Sql,$link);

header("Location: insertareg.php");
?>
 </body>
</html>  