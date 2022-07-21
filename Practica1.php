<?php
#Variables
$apellido = "Fernandez";
$x = 75;
unset($apellido);
$apellido = "Heraclito";
#$abuelo = (object)['nombre'=>'Pitufo', 'edad'=>90, 'apellido_paterno'=>$apellido];
$nombres = array(
    1 => "alex",
    2 => "ricardo", 
    3 => "juan", 
    4 => "ramon", 
    5 => "sabrina",
    6 => "polo",
    7 => "fred",
    8 => "ricardo",
    9 => "roro",
    10 => "beatriz"
    );
    $nombreAleatorio = rand(1,10);
$edadRandom = rand(1,100);
$nombreRandom = ucfirst($nombres[$nombreAleatorio]); 

$personaRandom = (object)['edad'=>$edadRandom, 'nombre'=>$nombreRandom, 'apellido_paterno'=>$apellido];

#$personas = array(
 #   ' persona 1 con los  ' => ' vivo',2,3,4,5,6,7,8,9,10,11,12,13,14,15);
#foreach ($personas as $muchos => $vivo)
# { echo 'Si la' . $muchos . 'se encuentra' . $vivo . '<br>'; }



#return $edadRandom > 75;

$personas = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
foreach ($personas as $muchos)
