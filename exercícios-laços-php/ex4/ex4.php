<?php

$paisA = 80000;
$paisB = 200000;

$ano = 0;

$taxaPopulacaoA = 0.03;
$taxaPopulacaoB = 0.015;

do {
    $paisA += $paisA * $taxaPopulacaoA;
    $paisB += $paisB * $taxaPopulacaoB;
    $ano++;
} while ($paisA < $paisB);

echo "Em $ano anos, a população do país A se igualou ou ultrapassou a população do país B.<br>";
echo "População atual de A: $paisA<br>";
echo "População atual de B: $paisB";

?>