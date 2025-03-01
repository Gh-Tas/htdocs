<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomes = $_POST["nomes"];
    $notas = $_POST["notas"];

    $alunos = [];
    $somaNotas = 0;
    $maiorNota = -1;
    $alunoMaiorNota = "";

    for ($i = 0; $i < 10; $i++) {
        $alunos[] = [
            "aluno" => $nomes[$i],
            "nota" => $notas[$i]
        ];
    $somaNotas += $notas[$i];

    if ($notas[$i] > $maiorNota) {
        $maiorNota = $notas[$i];
        $alunoMaiorNota = $nomes[$i];
    }
    }
}
    $mediaNotas = $somaNotas / 10;

    var_dump($alunos)
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dados</title>
</head>

<body>
    <?php
    echo "<h1>Resultados</h1>";
    echo "<p>Média da Classe: " . number_format($mediaNotas, 2) . "</p>";
    echo "<p>Aluno com Maior Nota: " . $alunoMaiorNota . " (" . $maiorNota . ")</p>";
    ?>
</body>

</html>