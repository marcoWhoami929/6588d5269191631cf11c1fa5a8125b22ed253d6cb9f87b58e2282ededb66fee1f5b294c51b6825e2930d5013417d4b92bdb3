<?php 


/**
 * CONTROLLERS
 */
require_once "controllers/template.controller.php";

/**
 * MODELS
 */
require_once "models/template.model.php";

/**
 * OTROS
 */
require_once "models/rutas.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();
