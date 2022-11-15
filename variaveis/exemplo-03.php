<?php
//////////////////TIPOS BÁSICOS

//STRING
$nome = "Lara";
$site = 'www.hcode.com.br';

//NUMÉRICO
$ano = 1990;

//PONTO FLUTUANTE
$salario = 5500.99;

//BOLEANO
$bloqueado = false;

//////////////////TIPOS COMPOSTOS

//ARRAY
$frutas = array("manga", "abacaxi", "banana");
echo $frutas[0];

//OBJETO
$nascimento = new DateTime();
var_dump($nascimento);

//////////////////TIPOS ESPECIAIS

//RESOURCE
$arquivo = fopen("exemplo-03.php", "r");
var_dump($arquivo);

//NULL
$nulo = NULL;

?>