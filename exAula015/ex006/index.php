<!DOCTYPE html>
<html>
<head>
    <title>Inverter Valores</title>
</head>
<body>
    <h1>Inverter Valores</h1>
    <form method="post" action="fim.php">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label for="valor<?php echo $i; ?>">Valor <?php echo $i; ?>:</label>
            <input type="text" name="valores[]" id="valor<?php echo $i; ?>" required><br><br>
        <?php endfor; ?>
        <input type="submit" value="Inverter">
    </form>
</body>
</html>