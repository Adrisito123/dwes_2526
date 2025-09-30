<?php
$num = 4;
$cadena = "3 botellas";
$decimal = "5.5";
$boolean = true;

$resultado1 = $num * $cadena;
$resultado2 = $num + $cadena;
$resultado3 = $num + $decimal;
$resultado4 = $num . $cadena;
$resultado5 = $num + $boolean;

echo "Resultado 1 (multiplicación con cadena): $resultado1<br>";
echo "Resultado 2 (suma con cadena): $resultado2<br>";
echo "Resultado 3 (suma con decimal): $resultado3<br>";
echo "Resultado 4 (concatenación con cadena): $resultado4<br>";
echo "Resultado 5 (suma con booleano): $resultado5<br>";
?>
