<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    $servidor = Ruta::ctrRutaServidor();

    $plantilla = ControladorPlantilla::ctrEstiloPlantilla();
    echo '<title>' . $plantilla["title"] . '</title>';
    echo '<link rel="icon" href="' . $servidor . $plantilla["icono"] . '">';
    ?>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="views/css/styles.css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <?php

    echo '<div class="wrapper">';

    include "moduls/header.php";



    if (isset($_GET["ruta"])) {
        if ($_GET["ruta"] == 'inicio') {
            include "moduls/slide.php";
        }
        $carpeta = "views/moduls/";
        $class  = $carpeta . $_GET["ruta"] . '.php';

        if (!file_exists($class)) {
            include "moduls/404.php";
        } else {
            include $class;
        }
    } else {
        include "moduls/slide.php";
        include "moduls/inicio.php";
    }
    echo '</div>';
    include "moduls/footer.php";

    ?>
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="views/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="views/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="views/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="views/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="views/js/active.js"></script>
</body>

</html>