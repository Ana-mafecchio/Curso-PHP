<?php

$name = 'Senac Americana - Cursos de TI';
//Deixa tudo maiusculo
echo strtoupper($name);
echo '<hr>';
//Deixa tudo minusculo 
echo strtolower($name);
echo '<hr>';
//Primeira letra da string vai ser maiuscula
echo ucfirst(strtolower($name));
echo '<hr>';
//Deixa o primeiro caractere das palavras em maiusculo
echo ucwords(strtolower($name));

?>