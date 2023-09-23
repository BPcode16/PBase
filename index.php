<?php 

require_once "controller/plantilla.controller.php";
require_once "controller/formularios.controller.php";
require_once "models/formularios.model.php";

$plantilla = new ControllerPlantilla();

$plantilla -> ctrTraerPlantilla();

?>