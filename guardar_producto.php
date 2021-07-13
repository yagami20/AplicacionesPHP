<html>
<head>
<title>Ejemplo de PHP</title>
</head>
<body>
<?php
include("conec1.php");
$conec= Conectarse();

$codigo=$_POST[codigo];
$nombre=$_POST["nombre"];
$precio=$_POST["precio"];
$cantidad=$_POST["cantidad"];
$componentes=$_POST["componentes"];
$tipo=$_POST["tipo"];
$fecha=$_POST["fecha"];
$Sql=" insert into PRODUCTO
(codigo,nombre,precio,cantidad,componentes,tipo,fecha) values 
('$codigo','$nombre', '$precio', '$cantidad', '$componentes','$tipo','$fecha')";
mysql_query($Sql,$conec);

print("
<body bgcolor='black' >
<center>
<font color='#FE2EF7'><h1>Datos ingresados correctamente</h1></font>
<form action='ingreso_producto.php'>
<input type='submit' value='Registrar Otro cliente' style='color: #003366; background-color: #99CCFF'>
</form>
<form action='index.php'>
<input type='submit' value='Salir' style='color:
#003366; background-color: #99CCFF'>
</form>
</center>
</body>
");
header("Location: index.php");
?>
</body>
</html>  