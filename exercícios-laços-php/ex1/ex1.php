<?php
$nota = $_POST["nota"];

for ($nota < 0; $nota > 10;) {
    echo "<script>
    alert('Nota inválida.Digite de novo');
    window.location.href = 'index.html';
    </script>";
    exit;
}

echo "Nota válida: $nota";
?>
