<?php
    include '../carrito.php';
?>
<?php
	$servidor = "localhost";
	$usuario = "root";
	$clave = "";
	$baseDatos = "proyecto_final";
	
	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDatos);
?>
<?php 
	if(isset($_POST['btnAccion'])){

		$nCuenta = $_POST["nCuenta"];
		$email = $_POST["email"];
    }
?>
<?php
    include '../template/cabecera.php';
?>

<div class="p-5" id="carritoF">
<h3>GRACIAS POR SU COMPRA!!</h3>
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
    <br>
<?php 
    echo "Número de cuenta: ".$nCuenta."<br>";
    echo "Email: ".$email;
?>
</div>

<?php 
include '../template/pie.php';
?>