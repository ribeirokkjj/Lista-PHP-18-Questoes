<?php 

function calcularFormula($x,$y) {

if (($x + $y) == 0) {
    return "Não foi possível realizar a divisão por 0";
}

$resultado = ((pow($x, 2) + pow($y, 2)) / ($x + $y));

return $resultado;

}

echo calcularFormula(34,53);

?>