<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>

<body>
    <h1>insira os dados dos alunos abaixo</h1>
    <form action="nota.php" method="post">
        <?php for ($i = 0; $i < 10; $i++):?>
            <label for="nome <?= $i ?>">Aluno <? $i + 1 ?></label>
            <input type="text" name="nomes[]" id="nome <?= $i ?>" required>
            <label for="notas <?= $i ?>">Nota <? $i + 1 ?></label>
            <input type="number" name="notas[]" id="notas <?= $i ?>" step="0.01">
        <?php endfor; ?>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>