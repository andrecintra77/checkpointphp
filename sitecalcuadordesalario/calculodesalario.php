<?php
function calcularINSS($salarioBruto)
{
    if ($salarioBruto <= 1302.00) {
        $aliquota = 0.075;
        $desconto = $salarioBruto * $aliquota;
    } elseif ($salarioBruto <= 2571.29) {
        $aliquota = 0.09;
        $desconto = $salarioBruto * $aliquota;
    } elseif ($salarioBruto <= 3856.94) {
        $aliquota = 0.12;
        $desconto = $salarioBruto * $aliquota;
    } elseif ($salarioBruto <= 7507.49) {
        $aliquota = 0.14;
        $desconto = $salarioBruto * $aliquota;
    } else {
        $desconto = 877.24;
    }
    return $desconto;
}

function calcularIRRF($salarioBruto)
{
    $baseIRRF = $salarioBruto - calcularINSS($salarioBruto);
    $impostoIRRF = 0;

    switch (true) {
        case ($baseIRRF <= 1903.98):
            $impostoIRRF = 0;
            break;
        case ($baseIRRF <= 2826.65):

            $impostoIRRF = ($baseIRRF * 0.075) - 142.80;
            break;
        case ($baseIRRF <= 3751.05):
            $impostoIRRF = ($baseIRRF * 0.15) - 354.80;
            break;
        case ($baseIRRF <= 4664.68):
            $impostoIRRF = ($baseIRRF * 0.225) - 636.13;
            break;
        default:
            $impostoIRRF = ($baseIRRF * 0.275) - 869.36;
            break;
    }

    return $impostoIRRF;
}
