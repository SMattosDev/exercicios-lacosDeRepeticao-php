<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$salario = $_POST["salario"];
$sexo = $_POST["sexo"];
$estadoCivil = $_POST["estadoCivil"];


// A função strlen() serve para contar a quantidade de caracteres de uma string.
if(strlen($nome) <= 3){
    echo "Nome inválido. Deve ter mais de 3 caracteres.<br>";
} else if($idade < 0 || $idade > 150){
    echo "Idade inválida <br>";
} else if($salario <= 0){
    echo "Salário inválido <br>";
} else if($sexo != 'f' && $sexo != 'm'){
    echo "Sexo inválido <br>";
} else if($estadoCivil != 's' && $estadoCivil != 'c' && $estadoCivil != 'v' && $estadoCivil != 'd'){
    echo "Estado civil inválido <br>";
} else {
    echo "Todos os dados são válidos!<br>";
    echo "Nome: $nome<br>";
    echo "Idade: $idade<br>";
    echo "Salário: R$ $salario<br>";
    echo "Sexo: $sexo<br>";
    echo "Estado civil: $estadoCivil<br>";
}

?>