
<table class="table table-dark table-danger mb-3 col-6 ">
<div class="col">
<div class="mb-3 col-4">
	
<tbody>
	<div class="container">
	<?php 

	//Primero llamar a nuestra clase Producto la cual instanciamos nuestro método ningunDato()
	//Segundo llamar a nuestra clase Producto la cuan instanciamos nuestro método Select()

	$proveedor = proveedor::ningunDato();
	$datos = $proveedor->select();

		echo '<tr>
			<th class="col-1">Codigo</th>
			<th class="col-2">Nombre proveedor</th>
			<th class="col-1">direccion</th>
			<th class="col-2">telefono</th>
			<td class="table-warning col-1">Editar</td>
			<td class="table-danger col-1">Eliminar</td>
			</tr>';

	while ($row = $datos->fetch_array()){

		echo '<tr>';
		echo '<td class="table-info">',$row['id_proveedor'] ,'</td>';
		echo '<td class="table-info">',$row['nombre_proveedor'] ,'</td>';
		echo '<td class="table-info">',$row['direccion'] ,'</td>';
		echo '<td class="table-info">',$row['telefono'] ,'</td>';
		echo '<td class="table-warning"><button class="btn btn-warning  "><a href=\"index.php?accion=editar&&id_producto=$row[id_producto]\">Editar</a></button></td>';
		echo '<td class="table-danger"><button class="btn btn-danger  position-center"><a href=\"index.php?accion=eliminar&&id_producto=$row[id_producto]\">Eliminar</a></button></td>';
		echo '</tr>';

		
	}
	?>
	</div>
</tbody>
</div>
</div>
</table>
<style>
	*{
		color: while;
	}
</style>

