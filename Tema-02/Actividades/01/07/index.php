<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 - Historia Personal</title>
</head>
<body>
    <h1>Presentación Personal</h1>
    <?php
        $nombre = "Adrian";
        $apellidos = "Aranegas Molina";
        $poblacion = "Ubrique";
        $edad = 20;
        $ciclo = "DAW";
        $curso = "2º";
        $modulo = "Desarrollo Web en Entorno Servidor";

        echo "<p>Me llamo $nombre $apellidos, tengo $edad años y vivo en $poblacion. 
        Actualmente estoy estudiando el ciclo formativo de $ciclo en su $curso curso. 
        Uno de los módulos que más me gusta es $modulo, ya que me permite aprender a desarrollar aplicaciones web dinámicas utilizando PHP.</p>";

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
