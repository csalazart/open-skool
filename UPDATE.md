OpenSkool Guia de actualizacion
=============================

1) Requerimientos
-----------------

Este metodo de actualizacion utiliza GIT para descargar el codigo fuente y sus dependencias.


2) Instalaci�n
--------------

Ejecuta paso a paso los siguientes comandos.

``` bash
git pull -v --progress  "origin"
```

``` bash
composer.phar selfupdate
```

Ejecuta el siguiente comando que actualizara las dependencias de la aplicaci�n.

``` bash
composer.phar update
```