
<?php 
include "cabeza.php";
	include "sesion.php";
	include "menu.php";
	$dato=$_POST['dato'];
	$bd=new mysqli("localhost", "root", "", "tienda");
 	$seleccionar=$bd->query("SELECT * FROM productos where codigo_producto like '%$dato%' or nombre_producto like'%$dato%' ");
 	
	while ($fila=mysqli_fetch_array($seleccionar)) {
 ?>


 <div class="panel panel-success">
 
  		<div class="panel-heading">Productos Registrados:
	
  		</div>
  		<?php  ?>
	<table class="table table-border">
	<tr class="btn-default">
		<td>codigo</td>
		<td>Codigo Producto</td>
		<td>Nombre Producto</td>
		<td>valor</td>
		<td>Inventario</td>
	
	</tr>
	<?php foreach ($seleccionar as $fila) {?>
	<tr>
		<td><?php echo $fila['codigo_producto']; ?></td>
		<td><?php echo $fila['nombre_producto']; ?></td>
		<td><?php echo $fila['precio_producto'] ?></td>
		<td><?php echo $fila['stock_producto'] ?></td>
	</tr>

	<?php } ?>

  <?php } ?>
</table>

</div>

<?php include "pie.php"; ?>