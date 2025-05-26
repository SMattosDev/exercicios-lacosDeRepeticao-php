<?php

$num = $_POST["num"];

if ($num < 1 || $num > 15) {
    echo "Número inválido! Digite um número entre 1 e 15.<br>";
} else {
    $fatorial = 1;
    $codigo = "";

    for ($i = $num; $i >= 1; $i--) {
        $fatorial *= $i;

        if ($i == 1) {
            $codigo .= $i;
        } else {
            $codigo .= $i . ".";
        }
    }

    echo "$num! = $codigo = $fatorial<br>";
}

echo '<br><a href="index.html">Calcular novamente</a>';

?>