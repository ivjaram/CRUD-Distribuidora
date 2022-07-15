<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<?php 
include 'class_producto.php';
$datos = array('nombre_producto'=>'','precio'=>'','cantidad'=>'','categoria'=>'','id_producto'=>'');
//vamos a crear la opción insert
$accion = 'insert';
include 'get.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<div class="volver">
		<form action="../index.html">
		<a href="http://localhost/CRUD-Distribuidora/"><buttons type="submit" class="btn btn-warning">Volver</button></a>
		</form>
	</div>
	<div class="Formulario">
  	 	<hgroup><h1>Formulario</h1>
 		<form name="envia_get_frm" action="post.php" method="Post">
 				
 			<!-- Elementos de mi formulario  -->
 			<!-- <label>Codigo de producto: </label>
 			<input type="text" name="producto_txt" value="<?php echo $datos['id_producto'] ?>">
 			<br></br> -->
 			<label>Nombre de producto </label>
 			<input type="text" name="nombre_producto_txt" value="<?php echo $datos['nombre_producto'] ?>">
 			<br></br>
 			<label>Ingrese precio: </label>
 			<input type="text" name="precio_txt" value="<?php echo $datos['precio'] ?>">
 			<br></br>
 			<label>Ingrese Cantidad: </label>
 			<input type="text" name="cantidad_txt" value="<?php echo $datos['cantidad'] ?>">
 			<br></br>
			 <label>Ingrese categoria: </label>
 			<input type="text" name="categoria_txt" value="<?php echo $datos['categoria'] ?>">
 			<br></br>
 			<input type="hidden" name="id_producto" value="<?php echo $datos['id_producto'] ?>">
 			<input type="hidden" name="accion" value="<?php echo $accion?>">
			 
 			<input type="submit" class="btn btn-success" name="submit" value="Guardar">
 		</form> 		
 	</hgroup>
	 </div>
<br>
	<div class="tabla col-12">
		<?php include 'tabla.php'; ?>
	</div>
</body>
</html>
<style>
	.formulario{
		text-align: center;
	}
</style>