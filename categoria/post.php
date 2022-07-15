<?php

include 'class_categoria.php';
//include 'bd.php';

//$db = new conexion();

if (isset($_POST['submit']))
{
	if ($_POST['accion'] == 'insert')
	{
		$id_categoria = $_POST['categoria_txt'];
		$nombre = $_POST['nombretxt'];
		
		
		//instanciar nuestra clase
		$Categoria = new Categoria($id_categoria, $nombre);
		//ejecutar el método insert
		$Categoria-> insert();
		
	}

	//Actualizar
	if ($_POST['accion'] == 'update'){

			$id_categoria = $_POST['categoria_txt'];
			$nombre = $_POST['nombretxt'];
			
			//instanciar nuestra clase
			$Categoria = new Categoria($id_categoria, $nombre);
			//ejecutar el método update
			$Categoria-> update();
			
		}	
}



?>