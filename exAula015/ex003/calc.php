<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valores = $_POST["valores"];
    $multiplicador = $_POST["multiplicador"];
    var_dump($valores); //mostrando que a variável é um vetor/array

    echo "<h1>Resultado</h1>";
    echo "<p>Valores: " . implode(", ", $valores) . "</p>";
    echo "<p>Multiplicador: " . $multiplicador . "</p>";
    echo "<p>Valores multiplicados: ";
    foreach ($valores as $valor) {
        $resultado = $valor * $multiplicador;
        echo $resultado . ", ";
    }
    echo "</p>";
}
?>