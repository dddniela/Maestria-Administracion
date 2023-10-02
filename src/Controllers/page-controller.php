<?php
/*
This page has the purpose to manage how the user can navigate among the pages
using $_GET['variable'].

Using $_GET we can send and recive informatino from the url.
*/


if (isset($_GET['option'])) {
    switch ($_GET['option']) {
        case 0:
            include_once "src/Views/inicio.php";
            break;

        case 1:
            include_once "src/Views/aspirantes-vista.php";
            break;

        case 2:
            include_once "src/Views/alumnos-vista.php";
            break;

        case 3:
            include_once "src/Views/lineas-investigacion.php"; //mapa curricular- lineas
            break;

        case 4:
            include_once "src/Views/mapa-curricular.php"; //conocenos- mapa curricular
            break;

        case 5:
            include_once "src/Views/nucleo-academico.php"; //comunidades- nucleo academico
            break;

         case 6:
             include_once "src/Views/egresados.php"; //perfilEgreso- Egresados
            break;

        case 7:
            include_once "src/Views/contacto-vista.php";
            break;

        default:
            include_once "src/Views/inicio.php";
            break;
    }

} else {
    include_once "src/Views/inicio.php";
}