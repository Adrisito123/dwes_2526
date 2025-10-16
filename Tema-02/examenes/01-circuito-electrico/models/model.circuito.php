<?php

$V =  $_POST['voltaje']; 
$R =  $_POST['resistencia'];

$Intensidad = $V / $R;
$Potencia = $V * $Intensidad;
$Energia = $Potencia* 3600;
$ResistenciaParalelo = $R /2;
?>