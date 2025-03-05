<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valores = $_POST["valores"];
    $valores_invertidos = array_reverse($valores);

    echo "<h1>Valores Invertidos:</h1>";
    echo "<ul>";
    foreach ($valores_invertidos as $valor) {
        echo "<li>" . $valor . "</li>";
    }
    echo "</ul>";
}
?>