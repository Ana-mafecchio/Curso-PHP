<?php

function escrever($texto){
    echo "{$texto} <br>";
}
//escrever('Mudkip');

//echo soma(12, 90);

function soma($n1, $n2, $taxa = 2){
    return ($n1 + $n2) * $taxa;
}
//echo soma(1, 2);

function media($nota1 , $nota2, $nota3, $nota4 ){
    return ($nota1 + $nota2 + $nota3 + $nota4) / 4; 
}
echo media (10, 5, 10, 5)
?>
