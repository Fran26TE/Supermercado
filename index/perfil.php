<!----- Conexión con el servidor ----->
<?php
	$servidor = "byk4010oj2lpus7am89y-mysql.services.clever-cloud.com";
	$usuario = "u3mwaqkoqafvaxb7";
	$clave = "QXxoad2QANKRgL85OfDm";
	$baseDatos = "byk4010oj2lpus7am89y";
	
	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDatos);
?>
<?php
    include '../template/cabecera.php';
?>

<div class="p-5" id="carritoF">
<h3>Perfil del usuario</h3>
	<table clas="table table-ligth table-bodered">
        <tbody>
    		<tr>
				<th width="15%">ID</th>
				<th width="40%">Nombre</th>
				<th width="45%">Email</th>
			</tr>
			<?php
				$consulta = "SELECT * FROM formulario";
				$ejecutarConsulta = mysqli_query($enlace, $consulta);
				$fila = mysqli_fetch_array($ejecutarConsulta);
				for ($i=0; $i<=$fila; $i++){
					echo "<tr>
					    <td>".$fila[0]."</td>
						<td>".$fila[1]."</td>
						<td>".$fila[2]."</td>
					</tr>";
					$fila = mysqli_fetch_array($ejecutarConsulta);
				}
				?>
	</table>
</div>

<?php 
include '../template/pie.php';
?>