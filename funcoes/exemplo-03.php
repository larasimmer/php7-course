<?php 

function ola($texto = "mundo", $periodo = "Bom dia") {
    return "Olá $texto! $periodo<br>";
}

echo ola();
echo ola("","Boa tarde");
echo ola("Fernanda","Boa noite");
echo ola("Lara","");

?>