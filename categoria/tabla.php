
<table class="table table-info mb-3 col-6">
<div class="col">
<div class="mb-3 col-4">
	
<tbody>
	<div class="container">
	<?php 

	//Primero llamar a nuestra clase Producto la cual instanciamos nuestro método ningunDato()
	//Segundo llamar a nuestra clase Producto la cuan instanciamos nuestro método Select()

	$Categoria = Categoria::ningunDato();
	$datos = $Categoria->select();

		echo '<tr>
			<th class="col-1">Codigo</th>
			<th class="col-2">Nombre</th>
			<th class="col-1">Editar</th>
			<th class="col-1">Eliminar</th>
			</tr>';

	while ($row = $datos->fetch_array()){

		echo '<tr>';
		echo '<th class="table-light">',$row['id_categoria'] ,'</th>';
		echo '<td class="table-light">',$row['nombre'] ,'</td>';
		echo "<td class='table-light'><button class='btn btn-primary'><a href=\"index.php?accion=editar&&id_categoria=$row[id_categoria]\">Editar</a></button></td>";
		echo "<td class='table-light'><button class='btn btn-danger  '><a href=\"index.php?accion=eliminar&&id_categoria=$row[id_categoria]\">Eliminar</a></</td>";
		echo '</tr>';

		
	}
	?>
	</div>
</tbody>
</div>
</div>
</table>
<style>
	.container{
		
		text-align: center;
	}
	a{
		color: white;
	}
</style>
