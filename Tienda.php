<?php
// Inicia la sesión
session_start();


// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['token'])) {
    header('Location: Ingreso.html');
    exit();
}
?>
<!DOCTYPE HTML5>
<html lang="es">

<head>
    <meta charset='utf-8'>
    <title>Tienda Tecnologica</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <style>
        body {
            background: rgb(196, 125, 125);
        }
    </style>
    <header>

        <div class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="container">

                <a href="#" class="navbar-brand">
                    <strong>Botellas</strong>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarHeader">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="Mostrar.php" class=" nav-link active">REGISTROS</a>
                        <li class="nav-item">
                            <a href="cerrarseccion.php" class=" nav-link active"> CERRAR SECCION </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </header>
    <br><br></dr>
    <center> <img src="img/c.png" alt="" height="300" width="450"> </center> <br>
    <form id="Users" action="php/Inventario.php" method="post">

        <label for="valor">Botellas:</label>
        <input type="number" name="Valor" id="valor" value="0" min="0">
        <label for="valor">Cliente:</label>
        <input type="text" name="Nombre" id="valor">
        <select name="Tamaño" id="Tamaño">
            <option value="Grande">Grande</option>
            <option value="Pequeña">Pequeña</option>
        </select>
        <select name="Ingreso" id="Tamaño">
            <option value="Salida">Salida</option>
            <option value="Entrada">Entrada</option>
        </select>
        <label for="valor">Transporte:</label>
        <input type="number" name="Transporte" id="valor" value="0">
        <label for="valor">Paga:</label>
        <input type="number" name="Paga" id="valor" value="0">

        <button>Ingresar</button>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"> </script>

</body>

</html>