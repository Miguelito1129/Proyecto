<?php

include ("Conexion.php");
$getmysql = new registro();
$getconex = $getmysql->conex();

$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Password2 = $_POST['Password2'];
$token = uniqid();


// Consulta de la base de datos para verificar si el usuario existe

$sql = "SELECT * FROM usuarios  WHERE usuario = '$Email'";
$result = mysqli_query($getconex, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo '<script>
    alert("Usuario ya habia sido registrado");
    window.history.go(-1); 
    </script>';
} else {

    if ($Password != $Password2) {
        echo '<script>
        alert("Las contraseñas no coinciden");
        window.history.go(-1); 
        </script>';

    } else {

        $insertar = "INSERT INTO usuarios  VALUES ('$Email','$Password','$token')";
        $resultado = mysqli_query($getconex, $insertar);
        if (!$resultado) {
            echo '<script>
                alert("Usuario no registrado Correctamente");
                window.history.go(-1); 
                </script>';
        } else {
            echo '<script>
                alert("Registrado Correctamente");
                window.history.go(-1); 
                </script>';
        }
        mysqli_close($getconex);

    }
}


?>