<?php
echo '<pre>';
$idades = [12 ,14 ,18 ,20 ,44 ,50 ,98 , 78, 56];

//echo $idades [count($idades) -1];
//echo end($idades);

$idadesFiltradas = array_filter($idades, function($idades){
    return $idades >=18;
});

var_dump($idadesFiltradas);

?>