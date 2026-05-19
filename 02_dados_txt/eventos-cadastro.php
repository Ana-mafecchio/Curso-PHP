<?php
$nome = $_POST['nome'];
$eventos = $_POST['eventos'];
$descricao = $_POST['descricao'];

$arquivo = fopen("eventos_db.txt", "a");
fwrite($arquivo, "$nome, \t $eventos, \t $descricao \n");
fclose($arquivo);
header ('location: eventos-formulario.php')
?>