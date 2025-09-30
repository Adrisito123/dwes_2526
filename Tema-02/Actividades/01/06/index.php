<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6 - Tabla de Variables</title>
</head>
<body>
    <h1>Información del Estudiante</h1>
    <?php
        $nombre = "Adrian";
        $apellidos = "Aranegas Molina";
        $poblacion = "Ubrique";
        $edad = 20;
        $ciclo = "DAW";
        $curso = "2º";
        $modulo = "Desarrollo Web en Entorno Servidor";

        echo "<table>
                <tr><td>Nombre</td><td>$nombre</td></tr>
                <tr><td>Apellidos</td><td>$apellidos</td></tr>
                <tr><td>Población</td><td>$poblacion</td></tr>
                <tr><td>Edad</td><td>$edad</td></tr>
                <tr><td>Ciclo</td><td>$ciclo</td></tr>
                <tr><td>Curso</td><td>$curso</td></tr>
                <tr><td>Módulo</td><td>$modulo</td></tr>
              </table>";
    ?>
</body>
</html>
