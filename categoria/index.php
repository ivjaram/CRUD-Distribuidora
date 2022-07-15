<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<?php 
include 'class_categoria.php';
$datos = array('nombre'=>'','id_categoria'=>'');
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
 			<input type="text" name="categoria_txt" value="<?php echo $datos['id_categoria'] ?>">
 			<br></br> -->
 			<label>Nombre de Categoria </label>
 			<input type="text" name="nombretxt" value="<?php echo $datos['nombre'] ?>">
 			<br></br>
 			<input type="hidden" name="id_categoria" value="<?php echo $datos['id_categoria'] ?>">
 			<input type="hidden" name="accion" value="<?php echo $accion?>">
			 
 			<input type="submit" class="btn btn-success" name="submit" value="Guardar">
 		</form> 		
 	</hgroup>
	 </div>
<br>
<?php include 'tabla.php'; ?>
</body>
</html>
<style>
	.formulario{
		text-align: center;
	}
</style>