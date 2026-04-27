<?php
//$carros = ['Uno', 'Gol', 'Fusion', 'Civic'];
//echo $carros[2];

$carroUm = ['Uno', 'Fiat', 'Branco'];
echo $carroUm[2];

$carroUm =[

'modelo' => 'Uno',
'marca'  => 'Fiat',
'cor'  => 'Branco',  

];

echo $carroUm['cor'];
echo $carroUm['modelo'];
echo $carroUm['marca'];

$carros_dois = [

    'modelo' => 'Punto',
    'marca' => 'Fiat',
    'cor' => 'Amarelo',

];


$carro_tres = [

'Modelo' => 'Fusca',
'Marca' => 'Volkswagen',
'cor' => 'Azul',

];

$carro_quatro = [

'Modelo' => 'Gol',
'Marca' => 'Volkswagen',
'cor' => 'Vermelho',

];
echo '<br>';

echo 'Modelo: ';
echo $carro_quatro ['Modelo'];
echo '<br>';
echo 'marca: ';
echo $carro_quatro ['Marca'];
echo '<br>';
echo 'cor: ';
echo $carro_quatro ['cor'];
 



?>