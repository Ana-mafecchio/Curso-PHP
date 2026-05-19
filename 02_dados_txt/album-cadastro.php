<?php

$nome_artista = $_POST['nome_artista'];
$nome_do_album = $_POST['nome_do_album'];
$ano = $_POST['ano'];

$arquivo = fopen("album_db.txt","a");
fwrite($arquivo, "$nome_artista, \t $nome_do_album, \t $ano \n");
fclose($arquivo);
header ('location: album-formulario.php')
?>