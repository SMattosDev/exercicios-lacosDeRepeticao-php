<?php

$populacaoA = $_POST['populacaoA'];
$populacaoB = $_POST['populacaoB'];

$taxaCrescimentoA = $_POST['taxaA'];
$taxaCrescimentoB = $_POST['taxaB'];

$anoRestantes = 0;

if (!$populacaoA || $populacaoA <= 0) {
    echo "População A deve ser um número positivo.";
    exit;
}

if (!$populacaoB || $populacaoB <= 0) {
    echo "População B deve ser um número positivo.";
    exit;
}

do {
    $populacaoA += $populacaoA * $taxaCrescimentoA;
    $populacaoB += $populacaoB * $taxaCrescimentoB;
    $anoRestantes++;
} while ($populacaoA <= $populacaoB);

echo "<h2>Resultado do Cálculo:</h2>";
echo "Após $anoRestantes ano(s), a população de A atingiu ou ultrapassou a de B.<br>";
echo "População de A ao final: $populacaoA habitantes.<br>";
echo "População de B ao final: $populacaoB habitantes.<br>";
echo "<a href='index.html'>Fazer outra operação</a>";

?>