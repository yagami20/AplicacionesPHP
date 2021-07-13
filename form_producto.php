<html>
<head>
<title>INICIO</title>
<body bgcolor="#FFE4B5">
<br><br>
<h2 align="center">REGISTRO DE DATOS DEL PRODUCTO</h2> <form action="guardar_producto.php" method="post">
<center>
<table align="center">
<tr>
<td border="1">
<tr><td>Codigo:</td><td><input type="text" name="codigo"
size="25" maxlength="12" placeholder="ejm 0123456789" onkeypress="return soloNumeros(event)" required></td></tr><br>
<tr><td>Nombre: </td><td><input type="text" name="nombre" size="25" maxlength="30" onkeypress="return soloLetras(event)" required></td></tr>
<tr><td>Precio: </td><td><input type="text" name="precio" size="25" maxlength="50" required></td></tr>
<tr><td>Componentes: </td><td><input type="text" name="componentes" size="25" maxlength="10" onkeypress="return soloNumeros(event)"></td></tr>
<tr><td>Cantidad: </td><td><input type="text" name="cantidad" size="25" maxlength="50" ></td></tr>
<tr><td>Tipo: </td><td><input type="text" name="tipo" size="25" maxlength="50"></td></tr>
<tr><td>Fecha: </td><td><input type="text" name="fecha" size="25" maxlength="50" ></td></tr>
</td>
</tr>
</table>
</center><center><br><input type="submit" name="ingresar" class="button_example" value="GUARDAR" id="ingresar"></center> <br><br></form>
</body>
</html>
