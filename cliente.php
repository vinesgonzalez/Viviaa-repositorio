<?php 
	include "cabeza.php";
	include "sesion.php";
	include "menu.php";
 ?>

<form method="POST" action="">
	<input type="number" name="documento" placeholder="Numero de Documento" class="form-control">
	<br>
	<input type="text" name="nombre" placeholder="Nombre" class="form-control">
	<br>
	<input type="number" name="telefono" placeholder="Telefono" class="form-control">
	<br>
	<input type="email" name="correo" placeholder="correo" class="form-control">
	<br>
	<input type="submit" name="x" class="btn btn-success btn-l">
</form>

<?php 	include "pie.php"; ?>

<?php
if(isset($_REQUEST['x'])){ 
$documento=$_POST['documento'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];

$bd=new mysqli("localhost", "root", "", "tienda");
$guardar_cliente=$bd->query("INSERT INTO clientes 
(documento_cliente, nombre_cliente, telefono_cliente, correo_cliente)
VALUES ('$documento', '$nombre','$telefono','$correo')");

if($guardar_cliente){  echo "Registro Exitoso";
}
else{ echo "Error Al registrar";
}
}

 ?>