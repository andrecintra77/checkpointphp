<?php
include 'calculodesalario.php';

$salarioBruto = 5000;
$inss = calcularINSS($salarioBruto).PHP_EOL;
$irrf = calcularIRRF($salarioBruto).PHP_EOL;
$salarioLiquido = $salarioBruto - $inss - $irrf;

echo "Salário Bruto: R$ " . number_format($salarioBruto, 2, ',', '.') .PHP_EOL;
echo "INSS: R$ " . number_format($inss, 2, ',', '.') . PHP_EOL;
echo "IRRF: R$ " . number_format($irrf, 2, ',', '.') . PHP_EOL;
echo "Salário Líquido: R$ " . number_format($salarioLiquido, 2, ',', '.') . PHP_EOL;
?>