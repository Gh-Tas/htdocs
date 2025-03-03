<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algum tipo de multiplicação</title>
</head>

<body>
    <h1>Insira os valores no vetor A e no Vetor B</h1>

    <form action="calc.php" method="post">
        <?php for ($i = 0; $i < 10; $i++): ?>
            <label for="vetorA<?php echo $i; ?>">Valor<?php echo " " . $i + 1; ?></label>
            <input type="number" name="vetorA[]" id="vetorA<?php echo $i; ?>">
        <?php endfor; ?>
        <?php for ($i = 0; $i < 10; $i++): ?>
            <label for="vetorB<?php echo $i; ?>">Valor<?php echo " " . $i + 1; ?></label>
            <input type="number" name="vetorB[]" id="vetorB<?php echo $i; ?>">
        <?php endfor; ?>
        <input type="submit" value="Multiplicar">
    </form>
</body>

</html>