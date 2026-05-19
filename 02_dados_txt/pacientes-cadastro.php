<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$fumante = $_POST['fumante'];

$arquivo = fopen("paciente_db.txt", "a");
fwrite($arquivo, "$nome, \t $telefone, \t $cidade, $fumante \n");
fclose($arquivo);
header ('location: pacientes-formulario.php')
?>
