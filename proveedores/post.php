<?php

include 'class_proveedor.php';
//include '../bd.php';

//$db = new conexion();

if (isset($_POST['submit']))
{
	if ($_POST['accion'] == 'insert')
	{
		$id_proveedor = $_POST['proveedor_txt'];
		$nombre_proveedor = $_POST['nombre_proveedor_txt'];
		$direccion = $_POST['direccion_txt'];
		$telefono = $_POST['telefono_txt'];
		
		
		//instanciar nuestra clase
		$producto = new proveedor($id_proveedor, $nombre_proveedor,$direccion,$telefono);
		//ejecutar el método insert
		$producto-> insert();
		
	}

	//Actualizar
	if ($_POST['accion'] == 'update'){

			$id_proveedor = $_POST['proveedor_txt'];
			$nombre_proveedor = $_POST['nombre_proveedor_txt'];
			$direccion = $_POST['direccion_txt'];
			$telefono = $_POST['telefono_txt'];
			
			
			//instanciar nuestra clase
			$producto = new proveedor($id_proveedor, $nombre_proveedor,$direccion,$telefono);
			//ejecutar el método update
			$producto-> update();
			
		}	
}



?>