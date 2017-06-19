<?php

$cpf = "029.009.313-98";

$cpf_formatado = str_replace(".", "", $cpf);
$cpf_formatado = str_replace("-", "", $cpf_formatado);

echo $cpf_formatado;

?>

