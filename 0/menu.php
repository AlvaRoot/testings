<?php
if($_GET['r']==1){
?>
<div align="center">
			<table border=2 id="root">

				<th colspan=3>Menú Root</th>
				<tr>
					<td>
						Usuarios
					</td>

					<td>
						<a href="#">Añadir</a>
					</td>

					<td>
						<a href="#">Modificar</a>
					</td>
				</tr>

				<tr>
					<td>
						Semanas
					</td>

					<td>
						<a href="#">Habilitar</a>
					</td>

					<td>
						<a href="#">Cerrar</a>
					</td>
				</tr>

			</table>
	</div>
<?php
}
?>

	<hr/>

	<div align="center">
		<table border=2 id="normal">

			<th colspan=4><a href="logout.php">Registros</a></th>
			<tr>
				<td>
					Pedidos
				</td>

				<td>
					<a href="#">Añadir</a>
				</td>

				<td>
					<a href="#">Modificar</a>
				</td>

				<td>
					<a href="#">Anular</a>
				</td>
			</tr>

		</table>
	</div>

	<hr/>