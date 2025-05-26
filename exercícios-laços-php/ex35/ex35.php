<?php

$num = (int)$_POST["num"];

echo "Números primos de 1 até $num:<br><br>";

for ($i = 2; $i <= $num; $i++) {
    $divisores = 0;

    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $divisores++;
        }
    }

    if ($divisores == 2) {
        echo $i . "<br>";
    }
}

?>