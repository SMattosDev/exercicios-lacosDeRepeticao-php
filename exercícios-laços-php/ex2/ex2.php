<?php

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    while($usuario == $senha){
         echo "<script>
        alert('Erro');
        window.location.href = 'index.html';
        </script>";
    exit;
    }

    echo "Logado";
?>