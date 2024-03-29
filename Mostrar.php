<?php


// Inicia la sesión
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['token'])) {
	header('Location: Ingreso.html');
	exit();
}

include ("php/Conexion.php");
$getmysql = new registro();
$getconex = $getmysql->conex();
$usuarios = "SELECT * FROM registros ";

function formatNumber($num)
{
	return number_format($num, 0, ',', '.');
}

if (isset($_POST['borrar'])) {
	$sql = "delete from registros";
	mysqli_query($getconex, $sql);
	if (!$sql) {
		echo '<script>
			alert("No Eliminados");
			 
			</script>';
	} else {
		echo '<script>
			alert("Registros Eliminados");
			
			</script>';
	}
}

if (isset($_POST['Enviar'])) {

	$Cliente = $_POST['Cliente'];
	$Producto = $_POST['Producto'];
	$Cantidad = $_POST['Cantidad'];

	$sql = "DELETE from registros where Cantidad='$Cantidad' and Cliente='$Cliente' and Botella='$Producto'";
	mysqli_query($getconex, $sql);

	if (!$sql) {
		echo '<script>
			alert("No Eliminado");
			
			</script>';
	}
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/Tabla.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<style>
	body {
		background-image: url(img/d.png);

	}
</style>

<body>
	<div class="content price">
		<h1>Tabla de registros</h1>
	</div>
	<div class="container-table2">

		<div class="table_header">Botellas grandes</div>
		<?php

		$resultado = mysqli_query($getconex, "SELECT SUM(CASE WHEN Cantidad > 0 THEN Cantidad ELSE 0 END)+
	SUM(CASE WHEN Cantidad < 0 THEN Cantidad ELSE 0 END) FROM registros where Botella='Grande'");
		$suma_total = mysqli_fetch_array($resultado)[0];
		?>
		<div class="table_ _item">
			<?php echo $suma_total; ?>
		</div>

	</div>

	<div class="container-table2">

		<div class="table_header">Botellas Pequeñas</div>
		<?php
		$resultado = mysqli_query($getconex, "SELECT SUM(CASE WHEN Cantidad > 0 THEN Cantidad ELSE 0 END)+
	SUM(CASE WHEN Cantidad < 0 THEN Cantidad ELSE 0 END) FROM registros where Botella='Pequeña'");
		$suma_total = mysqli_fetch_array($resultado)[0];
		?>
		<div class="table_ _item">
			<?php echo $suma_total; ?>
		</div>

	</div>

	<div class="container-table3">

		<div class="table_header">Dinero</div>
		<div class="table_header">Transporte</div>

		<div class="table_header">Total
		</div>

		<?php
		$resultado = mysqli_query($getconex, "SELECT SUM(Transporte) from registros");
		$suma_total = mysqli_fetch_array($resultado)[0];

		$Paga = mysqli_query($getconex, "SELECT SUM(Paga) from registros");
		$Total_Paga = mysqli_fetch_array($Paga)[0];

		$Dinero = $Total_Paga - $suma_total;
		?>
		<div class="table_ _item">
			<?php echo formatNumber($Total_Paga); ?>
		</div>
		<div class="table_ _item">
			<?php echo formatNumber($suma_total); ?>
		</div>

		<div class="table_ _item">
			<?php echo formatNumber($Dinero); ?>
		</div>

	</div>

	<div class="container-table">



		<div class="table_header">Fecha</div>
		<div class="table_header">Cliente</div>
		<div class="table_header">Producto</div>
		<div class="table_header">Cantidad</div>
		<div class="table_header">Estado</div>
		<div class="table_header">Total</div>
		<div class="table_header">Paga</div>
		<div class="table_header">Transporte</div>
		<div class="table_header">Debe</div>

		<?php
		$resultado = mysqli_query($getconex, $usuarios);
		while ($row = mysqli_fetch_assoc($resultado)) { ?>
			<div class="table_ _item">
				<?php echo $row["Fecha"]; ?>
			</div>
			<div class="table_ _item">
				<?php echo $row["Cliente"]; ?>
			</div>
			<div class="table_ _item">
				<?php echo $row["Botella"]; ?>
			</div>
			<div class="table_ _item">
				<?php echo $row["Cantidad"]; ?>
			</div>
			<div class="table_ _item">
				<?php echo $row["Inventario"]; ?>
			</div>
			<div class="table_ _item">
				<?php echo formatNumber($row["Total"]); ?>
			</div>
			<div class="table_ _item">
				<?php echo formatNumber($row["Paga"]); ?>
			</div>
			<div class="table_ _item">
				<?php echo formatNumber($row["Transporte"]); ?>
			</div>
			<div class="table_ _item">
				<?php echo formatNumber($row["Debe"]); ?>
			</div>


		<?php
		}
		mysqli_free_result($resultado);
		?>

	</div>


	<form method="post">
		<p class="t">Borrar Un Dato</p>
		<div class="container-table3">
			<div class="table_header">Cliente</div>
			<div class="table_header">Producto</div>
			<div class="table_header">Cantidad</div>

			<div class="table_ _item"><input type="text" name='Cliente'></div>
			<div class="table_ _item"><input type="text" name='Producto'></div>
			<div class="table_ _item"><input type="text" name='Cantidad'></div>

		</div>
		<div class="table_ _item"><input type="submit" name='Enviar'></div>

	</form>

	<form method="post">
		<input type="submit" name='borrar' value="Borrar todos los datos">
	</form>

	<form action="Grafica.php">
		<input type="submit" value="Grafica">
	</form>

	<form action="cerrarseccion.php">
		<input type="submit" value="cerrar seccion">
	</form>





</body>

</html>