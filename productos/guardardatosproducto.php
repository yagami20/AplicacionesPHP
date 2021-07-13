<meta charset="utf8">
<?php
include ('../clases/motor.php');
include ('../clases/producto.php');
$producto= new producto();
$producto->setidproducto ($_POST["idproducto"]);
$producto->setnombre($_POST["nombre"]);
$producto->setdescripcion($_POST["descripcion"]);
$producto->setpresentacion($_POST["presentacion"]);
$producto->setprecio($_POST["precio"]);
$producto->setstock($_POST["stock"]);
$rutaservidor="imagenesproducto";
$rutatemporal=$_FILES["imagen"]["tmp_name"];
$nombreimagen=$_FILES["imagen"]["name"];
$rutadestino=$rutaservidor.'/'.$nombreimagen;
$producto->setimagen($rutadestino);
$inser=$producto->ingresar();

if ($inser==1) {
	header("location:listarproductos.php");
	move_uploaded_file($rutatemporal, $rutadestino);
	echo "se ingreso con exito";
}
else
{
	#header("location:listarproductos.php");
	echo "no se ingreso";
}




?>