<?php

function converterTemperatura($temperatura) {

    $fahrenheitConvert = ($temperatura * 1.8) + 32;
    $kelvinConvert = $temperatura + 273.15;

    return "Temperatura original (ºC): ".$temperatura."; Conversão em Fahrenheit: ".$fahrenheitConvert."; Conversão em Kelvin: ".$kelvinConvert;

}

$oldTemp = 10;

echo converterTemperatura($oldTemp);

?>