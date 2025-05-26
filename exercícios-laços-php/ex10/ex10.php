<?php

$num1 = (int)$_POST["num1"];
$num2 = (int)$_POST["num2"];

echo "Números no intervalo entre $num1 e $num2:<br>";

for ($i = $num1 + 1; $i < $num2; $i++) {
    echo $i . "<br>";
}

for ($i = $num1 - 1; $i > $num2; $i--) {
    echo $i . "<br>";
}

?>