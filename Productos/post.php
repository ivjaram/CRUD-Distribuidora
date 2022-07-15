<?php

include 'class_producto.php';
//include 'bd.php';

//$db = new conexion();

if (isset($_POST['submit']))
{
	if ($_POST['accion'] == 'insert')
	{
		$id_producto = $_POST['productotxt'];
		$nombre_producto = $_POST['nombre_producto_txt'];
		$precio = $_POST['precio_txt'];
		$cantidad = $_POST['cantidad_txt'];
		$categoria = $_POST['categoria_txt'];
		
		//instanciar nuestra clase
		$producto = new Producto($id_producto, $nombre_producto,$precio,$cantidad,$categoria);
		//ejecutar el método insert
		$producto-> insert();
		
	}

	//Actualizar
	if ($_POST['accion'] == 'update'){

			$id_producto = $_POST['productotxt'];
			$nombre_producto = $_POST['nombre_producto_txt'];
			$precio = $_POST['precio_txt'];
			$cantidad = $_POST['cantidad_txt'];
			$categoria = $_POST['categoria_txt'];
			
			//instanciar nuestra clase
			$producto = new Producto($id_producto, $nombre_producto,$precio,$cantidad,$categoria);
			//ejecutar el método update
			$producto-> update();
			
		}	
}



?>