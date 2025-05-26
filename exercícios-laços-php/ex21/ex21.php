<?php

$num = (int)$_POST["num"];
$divisores = 0;

for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $divisores++;
    }
}

if ($divisores == 2) {
    echo "O número $num é primo";
} else {
    echo "O número $num não é primo";
}

?>