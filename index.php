<?php

define('DS',DIRECTORY_SEPARATOR);
define('ROOT',realpath(dirname(__FILE__)).DS);
define('VISTAS',ROOT.'Views'.DS.'modules'.DS);
define('RUTAURL','http://localhost/toport/');
define('RUTAASSETS',RUTAURL.'Views/assets/');

//++++++++++++  CONTROLADORES   +++++++++++++
require_once "Controllers/plantillaController.php";
require_once "Controllers/EnlacesController.php";

//++++++++++++  MODELOS   +++++++++++++
require_once "Models/EnlacesModels.php";
require_once "Models/Rutas.php";




$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();