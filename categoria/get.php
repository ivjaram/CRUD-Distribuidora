<?php


if ((isset($_GET['accion'])) && (isset($_GET['id_categoria'])) && ($_GET['accion'] == 'editar'))
{
	//echo $_GET['cod_producto'];
	//Pasar los datos al formulario
	$id_categoria = $_GET['id_categoria'];

	$Categoria = Categoria::soloCod($id_categoria);

	//Selecciono los datos
	$array = $Categoria->selectCod();

	//Obtener datos
	$datos = $array->fetch_array(); 

	//Vamos a crear la opción de update
	$accion = 'update';
	
}

if ((isset($_GET['accion'])) && (isset($_GET['id_categoria'])) && ($_GET['accion'] == 'eliminar'))
{
	$id_categoria = $_GET['id_categoria'];
	$Categoria = Categoria::solocod($id_categoria);

	//llama a la funcion eliminar
	$array = $Categoria->delete();

}


?>