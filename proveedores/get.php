<?php


if ((isset($_GET['accion'])) && (isset($_GET['id_proveedor'])) && ($_GET['accion'] == 'editar'))
{
	//echo $_GET['cod_producto'];
	//Pasar los datos al formulario
	$id_proveedor = $_GET['id_proveedor'];

	$proveedor = proveedor::soloCod($id_proveedor);

	//Selecciono los datos
	$array = $proveedor->selectCod();

	//Obtener datos
	$datos = $array->fetch_array(); 

	//Vamos a crear la opción de update
	$accion = 'update';
	
}

if ((isset($_GET['accion'])) && (isset($_GET['id_proveedor'])) && ($_GET['accion'] == 'eliminar'))
{
	$id_proveedor = $_GET['id_proveedor'];
	$proveedor = proveedor::solocod($id_proveedor);

	//llama a la funcion eliminar
	$array = $proveedor->delete();

}


?>