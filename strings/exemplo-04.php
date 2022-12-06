<?php

$frase = "A repetição é a mãe da retenção";

$palavra = "mãe";

$q = strpos($frase,$palavra);

echo $q;

echo '<br>';

$texto = substr($frase,0,$q);

echo $texto;

echo '<br>';

$texto2 = substr($frase,$q + strlen($palavra),strlen($frase));

echo $texto2;

?>