
<table class="table table-info  mb-3 col-6 ">
<div class="col">
<div class="mb-3 col-4">
	
<tbody>
	<div class="container">
	<?php 

	//Primero llamar a nuestra clase Producto la cual instanciamos nuestro método ningunDato()
	//Segundo llamar a nuestra clase Producto la cuan instanciamos nuestro método Select()

	$producto = Producto::ningunDato();
	$datos = $producto->select();

		echo '<tr>';
		echo '<th class="col-1">Codigo</th>';
		echo '<th class="col-2">Nombre producto</th>';
		echo '<th class="col-1">precio</th>';
		echo '<th class="col-2">Cantidad</th>';
		echo '<th class="col-2">categoria</th>';
		echo '<th class=" col-1">Editar</th>';
		echo '<th class=" col-1">Eliminar</th>';
		echo '</tr>';

	while ($row = $datos->fetch_array()){

		echo '<tr>';
		echo '<th class="table-light">',$row['id_producto'] ,'</th>';
		echo '<td class="table-light">',$row['nombre_producto'] ,'</td>';
		echo '<td class="table-light">',$row['precio'] ,'</td>';
		echo '<td class="table-light">',$row['cantidad'] ,'</td>';
		echo '<td class="table-light">',$row['categoria'] ,'</td>';
		echo "<td class='table-light'><button class='btn btn-primary'><a href=\"index.php?accion=editar&&id_producto=$row[id_producto]\">Editar</a></button></td>";
		echo "<td class='table-light'><button class='btn btn-danger '><a href=\"index.php?accion=eliminar&&id_producto=$row[id_producto]\">Eliminar</a></</td>";
		echo '</tr>';

		
	}
	?>
	</div>
</tbody>
</div>
</div>
</table>
<style>
	a{
		color: white;
	}
</style>

