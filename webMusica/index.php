<?php
error_reporting(E_ALL);			    // directivas para activar 
ini_set('display_errors', '1');	    // la notificación de errores

session_start();                    // Preparate que voy a usar sesiones

include_once 'model/bd.inc.php';

include_once 'view/header.inc.php';
include_once 'view/footer.inc.php';

include_once 'controller/controller.inc.php';

include_once 'view/show_view.php';

actualizar_sesion();                // Llamamos a la función que actualiza la sesión

show_header();                      // Llamamos a la función que muestra el header
show_menu();
show_content();                     // Llamamos a la función que muestra el contenido de la parte central de la página
show_footer();                      // Llamamos a la función que muestra el foote


?>
