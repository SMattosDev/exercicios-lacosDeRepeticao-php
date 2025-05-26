<?php

$anterior = 0;
$atual = 1;

echo "Série de Fibonacci até passar de 500:<br>";

while (true) {
    $proximo = $anterior + $atual;

    if ($proximo > 500) {
        break;
    }

    echo "$proximo ";

    $anterior = $atual;
    $atual = $proximo;
}

?>