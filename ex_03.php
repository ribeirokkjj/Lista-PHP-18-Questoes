<?php

function mascararCpf($cpf) {

return str_repeat("*", strlen($cpf) - 4) . (substr($cpf, -4));

}

$texto = 24287054930;

echo $texto . "\n";

echo mascararCpf($texto) . "\n";

?>