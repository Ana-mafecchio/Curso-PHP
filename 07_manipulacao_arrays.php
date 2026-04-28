<?php
$infoEmpresa = [
    'nome' => 'Senac Americana',
    'funcionario' => 'Paulo Santos',
    'anoAtual' => 2026,
];

$infoCursos = [
    'cursos' => ['PHP', 'JS', 'Vue JS', 'Laravel'],
    'totalCursos' => 26
];
echo '<pre>'; 
// Mostra as chaves da array
//var_dump(array_keys($infoEmpresa));
//mostra os valores do array
//var_dump(array_values($infoEmpresa));
//mostra o tanto de elemento de um array
//var_dump(count($infoEmpresa));

$infoEmpresa = array_merge($infoEmpresa,$infoCursos);
print_r($infoEmpresa);
?>