<?php
session_start();

include ("Conexion.php");
$getmysql = new registro();
$getconex = $getmysql->conex();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Email = $_POST["Email"];
  $password = $_POST["Password"];

  $sql = "SELECT Token FROM usuarios WHERE usuario = '$Email' and contraseña='$password' ";

  $result = mysqli_query($getconex, $sql);
  $total = mysqli_fetch_array($result)[0];
  $_SESSION['token'] = $total;
  $count = mysqli_num_rows($result);
  if ($count == 1) {
    header("location: ../Tienda.php?token=" . $total);
  } else {

    echo '<script>
        alert("Nombre de usuario o contraseña incorrectos.");
        window.history.go(-1); 
        </script>';
  }


}
?>