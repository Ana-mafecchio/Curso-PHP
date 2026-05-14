<?php
/*$nome_do_gato = $_POST['nome_do_gato'];
$idade = $_POST['idade'];
$castrado = $_POST['castrado'];
$possui_doenca = $_POST['possui_doenca'];

echo "$nome_do_gato, $idade, $castrado, $possui_doenca";
*/
$nome_do_gato = $_POST['nome_do_gato'];
$idade = $_POST['idade'];
$castrado = $_POST['castrado'];
$possui_doenca = $_POST['possui_doenca'];

$arquivo = fopen("gato_db.txt","a");
fwrite($arquivo, "$nome_do_gato, \t $idade, \t $castrado, \t $possui_doenca \n");
fclose($arquivo);
?>