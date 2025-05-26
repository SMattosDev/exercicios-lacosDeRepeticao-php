<?php

$num1 = (int)$_POST["num1"];
$num2 = (int)$_POST["num2"];

$soma = 0;
echo "Números no intervalo entre $num1 e $num2:<br>";

for ($i = $num1 + 1; $i < $num2; $i++) {
    echo $i . "<br>";
    $soma += $i;
}

for ($i = $num1 - 1; $i > $num2; $i--) {
    echo $i . "<br>";
    $soma += $i;
}
echo "<br> A soma dos números do intervalo é: $soma"
?>