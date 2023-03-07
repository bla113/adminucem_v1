<?php

/*=============================================
    CRONTROLADORES
=============================================*/

require_once('controladores/plantilla.controlador.php');
require_once('controladores/usuarios.controlador.php');


/*=============================================
    MODELOS
=============================================*/


 require_once('modelos/usuarios.modelo.php');




 /*=============================================
    PLANTILLA
=============================================*/
$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();