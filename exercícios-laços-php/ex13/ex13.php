<?php

$base =$_POST['num1'];
$expoente =$_POST['num2'];

$res = 1;

for($i = 1; $i <= $expoente; $i++){
    $res *= $base;
}

echo"$base elevado a $expoente é igual: $res";

?>