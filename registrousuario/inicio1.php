<?php
	session_start();
	include ('../clases/carrito.php');
	$email=$_POST["email"];
	$contras=$_POST["contraseña"];

	if(($email=="")||($contras=="")){
		$destino="../registrousuario/inicio.php";
		echo "no puedo ingresar";
	}
	else{
		$_SESSION["correo"]=$email; 
		$_SESSION["contraseña"]= $contras;
		$_SESSION["valor"]= 2;
		$_SESSION["carrito2"]= new carrito();
		header("location:../compras/listarproductoscomprar.php");
		
	}
?>