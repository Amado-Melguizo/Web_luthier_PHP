# Web_luthier

Web basada en lenguaje PHP & con gestor de datos MYSQL.


Te indico varias cosillas para que te faciliten
el uso y visualizacion de la web.

## Sobre los archivos y código


Su estructura se compone de los siguientes archivos:

o	Vista del archivo de configuracion:
-	configuration.inc.php --> archivo de configuracionde la web

o	Vista del archivo de la base de datos:
-	music_stock.sql --> archivo de la base de datos 

o	Vista de las funciones de la página:
-	controller.inc.php --> archivo con las funcionalidades de la web

o	Vista de las funciones de la base de datos:
-	bd.inc.php --> archivo con funcionalidades de la base de datos

o	Vista de la página:
-	index php: --> archivo raíz donde se enlazan todos los archivos.

  * show_view.php --> archivo de visualización de la pagina
	* header.inc.php --> archivo de visualización de la cabezera
	* footer.inc.php --> archivo de visualización del footer

## Sobre la base de datos

Pasos para el ususario;
- Crear ususario:
CREATE USER 'user'@'localhost' IDENTIFIED BY 'user1234';

- Dar permisos:
GRANT ALL PRIVILEGES ON * . * TO 'user'@'localhost';

## Sobre los usuarios

   *usuario*  --  contraseña
-------------------------------------
   
    user@admin -- user

    user@user -- user

---------------------------------------------------------------
Nada mas , disfruta de la web!
