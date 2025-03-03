<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de números</title>
</head>
<body>
    <h1>escreva 10 números abaixo</h1>    
    <form action="resultado.php" method="post">
    <?php for ($i = 0; $i < 10; $i++): ?>
    <label for="numero<?= $i ?>">Número <?php echo $i; ?>:</label>
    <input type="number" name="numeros[]" id="numero<?php echo $i; ?>" required><br><br>
    <?php endfor; ?>
    <button type="submit">Enviar</button>
    </form>
</body>
</html>