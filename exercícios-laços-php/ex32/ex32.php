<?php

$num = $_POST["num"];

$fatorial = 1;
$codigo = "";

for ($i = $num; $i >= 1; $i--) {
    $fatorial *= $i;

    if ($i > 1) {
        $codigo .= $i . ".";
    } else {
        $codigo .= $i;
    }
}

echo "Fatorial de $num" . "<br>";
echo "$num! = $codigo = $fatorial";

?>
