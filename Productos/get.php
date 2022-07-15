<?php


if ((isset($_GET['accion'])) && (isset($_GET['id_producto'])) && ($_GET['accion'] == 'editar'))
{
	//echo $_GET['cod_producto'];
	//Pasar los datos al formulario
	$id_producto = $_GET['id_producto'];

	$producto = Producto::soloCod($id_producto);

	//Selecciono los datos
	$array = $producto->selectCod();

	//Obtener datos
	$datos = $array->fetch_array(); 

	//Vamos a crear la opción de update
	$accion = 'update';
	
}

if ((isset($_GET['accion'])) && (isset($_GET['id_producto'])) && ($_GET['accion'] == 'eliminar'))
{
	$id_producto = $_GET['id_producto'];
	$producto = Producto::solocod($id_producto);

	//llama a la funcion eliminar
	$array = $producto->delete();

}


?>