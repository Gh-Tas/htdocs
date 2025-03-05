<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicador</title>
</head>

<body>
    <form action="calc.php" method="post">
        <?php for ($i = 0; $i < 10; $i++): ?>
            <label for="valor<?php echo $i; ?>">valor <?php echo $i + 1; ?></label>
            <input type="number" name="valores[]" id="valor<?php echo $i; ?>" ><br><br>
        <?php endfor; ?>
        <label for="multiplicador">Multiplicador</label>
        <input type="number" name="multiplicador" id="idmulti">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>