<?php

$nome = "Lara";

function teste() {
    global $nome;
    echo $nome;
}

function teste2() {
    $nome = "Fernanda";
    echo "Agora no teste2: ".$nome;
}

teste();
teste2();

?>