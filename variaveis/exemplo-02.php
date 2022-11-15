<?php

$nome1 = "Lara";

echo $nome1;

unset($nome1);

if(isset($nome1)) {
    echo $nome1;
}

$nome = "Lara";
$sobrenome = "Simmer";
$nomeCompleto = $nome . " ". $sobrenome;

echo $nomeCompleto;

?>