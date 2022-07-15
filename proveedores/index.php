<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<?php 
include 'class_proveedores.php';
$datos = array('nombre_proveedor'=>'','direccion'=>'','telefono'=>'','id_proveedor'=>'');
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
		<div class="fondo">
		<div class="cosa">
			<hgroup><h1>Proveedores</h1>
			<form name="envia_get_frm" action="post.php" method="Post">
					
				<!-- Elementos de mi formulario  -->
				<!-- <label>Codigo de producto: </label>
				<input type="text" name="proveedor_txt" value="<?php echo $datos['id_proveedor'] ?>">
				<br></br> -->
				<label>Nombre de Proveedor </label>
				<input type="text" name="nombre_proveedor_txt" value="<?php echo $datos['nombre_proveedor'] ?>">
				<br></br>
				<label>Ingrese Direccion: </label>
				<input type="text" name="direccion_txt" value="<?php echo $datos['direccion'] ?>">
				<br></br>
				<label>Ingrese Telefono: </label>
				<input type="text" name="telefono_txt" value="<?php echo $datos['telefono'] ?>">
				<br></br>
				<input type="hidden" name="id_proveedor" value="<?php echo $datos['id_proveedor'] ?>">
				<input type="hidden" name="accion" value="<?php echo $accion?>">
				
				<input type="submit" class="btn btn-success" name="submit" value="Guardar">
			</form> 		
			</hgroup>
		</div>
		</div>
	</div>
<br>
<?php include 'tabla.php'; ?>
</body>
</html>
<style>
	body{
		background: url(../img/ventas.png);
	}
	.cosa{
		text-align: center;
		background:white;
		width: 45%;
		border-radius:50%;
	}
	.formulario{
		text-align: center;
		background-position: center center;
		
		background-attachment: fixed;
		background-size: cover;

	}
	.volver{
		padding: 30px;
		
	}
</style>