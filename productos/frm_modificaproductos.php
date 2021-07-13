<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="../css/estilomenu.css">
	<title>CLIENTES INGRESAR</title>
</head>
<body>
<div>
	<?php
$id=$_GET['id'];
include '../conexion/conexion.php';
$dbconn=conexion();
	include '../funciones/funciones.php';
menu();
$consulta=pg_query($dbconn,"select *from producto where idproducto='$id'");
if($rows=pg_fetch_array($consulta))
{
?>	
	<form method="POST"  name="cliente" action="modificarproductos.php">
		<div class="principal">
			<label>Id Producto:</label>
			<input type="text" name="idproducto" value="<?php echo $rows['idproducto']; ?>">
			<label>Nombre:</label>
			<input type="text" name="nombre" value="<?php echo $rows['nombreproducto']; ?>">
			<label>Descripcion:</label>
			<input type="text" name="descripcion" value="<?php echo $rows['descripcion']; ?>">
			<label>Presentacion</label>
			<input type="text" name="presentacion" value="<?php echo $rows['presentacion']; ?>">
			<label>Precio</label>
			<input type="text" name="precio" value="<?php echo $rows['precio']; ?>">
			<label>Stock</label>
			<input type="text" name="stock" value="<?php echo $rows['stock']; ?>">
			<label>Imagen</label>
			<input type="file" name="imagen" value="<?php echo $rows['imagen']; ?>">
			

		</div>
		
		<input type="submit" value="GUARDAR">
		<input type="submit" value="CANCELAR">
	</form>
</div>
<?php }?>
</body>
</html>
