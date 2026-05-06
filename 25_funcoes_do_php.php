<?php

$empresa = 'Senac Jaú';
echo "$empresa <br>";
//Substitue o conteúdo na variavél indicada.
$novaEmpresa = str_replace('Jaú', 'Americana', $empresa);
echo "$novaEmpresa <br>";
//Mostra do ponto inicial indicado até o outro ponto também indicado.
echo substr($novaEmpresa, 0, 4) . "<br>";
//Quanta a quantidade de caracteres
echo strlen($novaEmpresa);

?>