
<table class="table table-info mb-3 col-6 ">
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
			<th class="col-1">Editar</th>
			<th class="col-1">Eliminar</th>
			</tr>';

	while ($row = $datos->fetch_array()){

		echo '<tr>';
		echo '<th class="table-light">',$row['id_proveedor'] ,'</th>';
		echo '<td class="table-light">',$row['nombre_proveedor'] ,'</td>';
		echo '<td class="table-light">',$row['direccion'] ,'</td>';
		echo '<td class="table-light">',$row['telefono'] ,'</td>';
		echo "<td class='table-light'><button class='btn btn-primary'><a href=\"index.php?accion=editar&&id_proveedor=$row[id_proveedor]\">Editar</a></button></td>";
		echo "<td class='table-light'><button class='btn btn-danger  position-center'><a href=\"index.php?accion=eliminar&&id_proveedor=$row[id_proveedor]\">Eliminar</a></button></td>";
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

