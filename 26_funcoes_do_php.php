<?php
//isset- retorna verdadeiro se a variavel existe 
$nome = 'Carlos Ferreira';
if (isset($nome)){
    echo $nome;
}else{
    echo 'Não existe!';
}

//remove a variavel
unset($nome);
if (isset($nome)){
    echo $nome;
}else{
    echo 'Não existe!';
}

?>