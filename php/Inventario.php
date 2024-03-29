<?php

include ("Conexion.php");
$getmysql = new registro();
$getconex = $getmysql->conex();

$Valor = $_POST['Valor'];
$Nombre = $_POST['Nombre'];
$Botella = $_POST['Tamaño'];
$Ingreso = $_POST['Ingreso'];
$Transporte = $_POST['Transporte'];
$Paga = $_POST['Paga'];


if ($Botella == 'Grande') {
    $Total = $Valor * 5000;
} else {
    $Total = $Valor * 2000;
}
$Debe = $Total - $Paga;

$BotellasGrandes = mysqli_query($getconex, "SELECT SUM(CASE WHEN Cantidad > 0 THEN Cantidad ELSE 0 END)+
SUM(CASE WHEN Cantidad < 0 THEN Cantidad ELSE 0 END) FROM registros where Botella='Pequeña'");
$Total_Grandes = mysqli_fetch_array($BotellasGrandes)[0];


$BotellasPequeñas = mysqli_query($getconex, "SELECT SUM(CASE WHEN Cantidad > 0 THEN Cantidad ELSE 0 END)+
SUM(CASE WHEN Cantidad < 0 THEN Cantidad ELSE 0 END) FROM registros where Botella='Grande'");
$Total_Pequeñas = mysqli_fetch_array($BotellasPequeñas)[0];




if ($Ingreso == 'Salida') {

    $Valor = -$Valor;
} else {
    $Nombre = 'INVENTARIO';
    $Total = 0;
    $Paga = 0;
    $Debe = 0;
    $Transporte = 0;
}





$insertar = "INSERT INTO registros (Cantidad, Cliente, Botella, Inventario, Transporte,Total,Paga,Debe) 
VALUES ($Valor,'$Nombre','$Botella','$Ingreso','$Transporte',$Total,$Paga,$Debe)";

$resultado = mysqli_query($getconex, $insertar);





if (!$resultado) {
    echo '<script>
    alert("No registrado Correctamente");
    window.history.go(-1); 
    </script>';
} else {
    echo '<script>
    alert("Registrado Correctamente");
    window.history.go(-1); 
    </script>';
}


mysqli_close($getconex);


?>