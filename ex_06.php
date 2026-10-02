<?php

function converterTemperatura($temperatura) {

    $fahrenheitConvert = ($temperatura * 1.8) + 32;
    $kelvinConvert = $temperatura + 273.15;

    return "temperatura original (ºc): ".$temperatura."; conversão em fahrenheit: ".$fahrenheitConvert."; conversão em kelvin: ".$kelvinConvert;

}

$oldTemp = 10;

echo converterTemperatura($oldTemp);

?>