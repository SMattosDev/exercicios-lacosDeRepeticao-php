<?php

$num1 = (int)$_POST["num1"];
$contador = 1;
$res = 0;
echo"Tabuada do $num1<br>";

do {
    $res = $num1 * $contador;
    echo "$num1 X $contador = $res<br>";
    $contador++;
}while($contador <=10);


?>