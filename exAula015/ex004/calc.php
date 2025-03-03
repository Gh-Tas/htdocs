<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $vetorA = $_POST['vetorA'];
    $vetorB = $_POST['vetorB'];
    var_dump($vetorA); // Mostrando que as variáveis vetorA e vetorB são vetores/arrays
    var_dump($vetorB);

    echo "<h1>Resultado das multiplicações entre vetores</h1>";
    echo "<p>Vetor A: " . implode(", ", $vetorA) . "</p>";
    echo "<p>Vetor B: " . implode(", ", $vetorB) . "</p>";
    for ($i = 0; $i < 10; $i++) {
        $resultado = $vetorA[$i] * $vetorB[$i];
        echo $resultado . ", ";
    }
}
