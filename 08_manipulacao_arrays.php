<?php
echo '<pre>';
$carrinho = ['Arroz', 'Sabão', 'Feijão', 'balinhas'];
var_dump($carrinho);

echo '<hr>';

array_pop($carrinho);
var_dump($carrinho);

echo '<hr>';

//remove o primeiro elemento
array_shift($carrinho);
var_dump($carrinho);

echo '<hr>';

//remove da memoria uma variavel ou elemento do array
unset($carrinho[0]);
var_dump($carrinho);

echo '<hr>';

array_push($carrinho, 'Tapete');
array_push($carrinho, 'Rodo');
var_dump($carrinho);

echo '<hr>';

array_unshift($carrinho, 'Microondas');
array_unshift($carrinho, 'Tapete');
var_dump($carrinho);

echo '<hr>';

$carrinho = array_unique($carrinho);
var_dump($carrinho);

?> 