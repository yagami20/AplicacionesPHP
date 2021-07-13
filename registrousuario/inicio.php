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


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Inicio de Sesi&oacute;n</title>
		<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/estilomenu.css">
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
	<body bgcolor="#D2EBF7" style="font-family: Tahoma;">
		<?php
include ('../clases/motor.php');
include '../funciones/funciones.php';
menu(); echo fecha();
echo "<br><br><br><br>";
$nombre=2;
menu2();
menu1($nombre);

?>
		<h1>Inicio de Sesi&oacute;n</h1>
		<form method="post" action="inicio1.php">
			<table width="200">
				<caption><strong>Ingrese sus Datos</strong></caption>
				<tr>
					<td>Correo:</td>
					<td>
						<input type="text" name="email" size="15" maxlength="15">
					</td>
				</tr>
				<tr>
					<td>Contraseña:</td>
					<td>
						<input type="password" name="contraseña" size="15" maxlength="15">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input name="enviar" type="submit" value="enviar" id="enviar">
					</td>
				</tr>
			</table>
		</form>
		<?php
piepagina();
?>
	</body>
</html>