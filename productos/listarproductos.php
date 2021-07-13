<?php
session_start();
if(isset($_SESSION["valor"])){
$nombre=$_SESSION["valor"];

}
else{
	$_SESSION["valor"]=1;
	$nombre=$_SESSION["valor"];
}
?>
<!doctype>
<html>
<head>
<<link rel="stylesheet" type="text/css" href="../css/estilomenu.css">
	<link rel="stylesheet" type="text/css" href="../css/listar.css">
	<link rel="stylesheet" type="text/css" href="../css/paginaprincipal.css">
<title>Listado de clientes</title>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Fuentes de Google -->
	

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../funciones/style.css">
	<script src="../funciones/js/jquery.min.js"></script>
	<script src="../funciones/js/main.js"></script>
</head>
<body>
<?php
include ('../clases/motor.php');
include ('../clases/producto.php');
include '../funciones/funciones.php';
menu(); echo fecha();
echo "<br><br><br><br>";
menu2();
menu1($nombre);
$producto= new producto();
?>
<table border="1" width="50%">
	<tr>
		<td><b>IDPRODUCTO</b></td>
		<td><b>NOMBRE PRODUCTO</b></td>
		<td><b>DESCRIPCION</b></td>
		<td><b>PRESENTACION</b></td>
		<td><b>PRECIO</b></td>
		<td><b>STOCK</b></td>
		<td><b>MODIFICAR</b></td>
		<td><b>ELIMINAR</b></td>

	</tr>	
	<?php
		$producto->mostrar();
		
?>
 
</table>
<div class="piepagina">
<?php
piepagina();
?>
</body>
</html>
