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
	<meta charset="utf8">
	<script type="text/javascript" src="../js/validaproducto.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/estilomenu.css">
	<link rel="stylesheet" type="text/css" href="../css/paginaprincipal.css">
	<link rel="stylesheet" type="text/css" href="../css/formulario.css">
	 <link rel="stylesheet" href="../funciones/style.css">
    <script src="../funciones/js/jquery.min.js"></script>
    <script src="../funciones/js/main.js"></script>
	<title>CLIENTES INGRESAR</title>
</head>
<body>
	<br>
<?php
include '../funciones/funciones.php';
include '../clases/presentacion.php';
include ('../clases/motor.php');
menu(); echo fecha();
menu2();
echo "<br><br><br><br>";
menu1($nombre);
?>
<div >
	<form onsubmit="return validar();" method="POST"  name="cliente" action="guardardatosproducto.php" enctype="multipart/form-data">
		<div class="principal">
			<label>Id Producto:</label>
			<input maxlength="5" id="idproducto" type="text" name="idproducto" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);revisarObligatorio(this);revisarNumerico(this)">
			<label>Nombre:</label>
			<input  type="text" id="nombre" name="nombre" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);revisarObligatorio(this);revisarLongitud(this,5)">
			<label>Descripcion:</label>
			<input id="descripcion"   type="text" name="descripcion" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);revisarLongitud(this,8)">
			<label>Precio</label>
			<input  id="precio"  type="text" name="precio" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);revisarObligatorio(this) ;revisarNumerico(this)">
			<label>Stock</label>
			<input id="stock"  type="text" name="stock" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this);revisarObligatorio(this);revisarNumerico(this)">
			<label>Imagen</label>
			<input id="imagen"  type="file" name="imagen" onfocus="entroEnFoco(this)"  onblur="salioDeFoco(this)">	
			<label>Presentacion</label>
			<select id="presentacion" name="presentacion"  onfocus="entroEnFoco(this)" onblur="salioDeFoco(this)" >
    			<option value="">Seleccione</option>
    			<?php
    			$query="SELECT *FROM presentacion";
		           $rs=pg_query($query);
		        while($row = pg_fetch_array($rs)) {
			     printf("
			     	<option name='%s'>%s</option>
   					 ",
					$row["idpresentacion"],$row["nombre"]);                                                                          
			}
    			?>
    			
			</select>

			</div>
		
		<input type="submit" value="GUARDAR">
		<input type="submit" value="CANCELAR">
	</form>
</div>
</div>
<div class="piepagina">
<?php
piepagina();
?>
</body>
</html>
