<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
</head>
<body>
    <h1>Calendário</h1>
    <P>Digite o número correspondente ao mês que deseja visualizar</P>
    <form action="result.php" method="post">
        <label for="mes">Mês</label>
        <input type="number" name="mes" id="idmes" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>