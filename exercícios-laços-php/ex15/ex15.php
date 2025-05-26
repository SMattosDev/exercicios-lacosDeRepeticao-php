ex15: <?php

$n = (int)$_POST['n'];

$a = 1;
$b = 1;

if($n >= 1) echo "$a ";
if($n >= 2) echo "$b ";

for($i = 3; $i <= $n; $i++){

$c = $a + $b;
echo "$c ";
$a = $b;
$b = $c;

}

?>