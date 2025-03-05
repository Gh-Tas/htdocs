<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Pessoas</title>
</head>
<body>
    <h1>Cadastro de Pessoas</h1>
    <form method="post" action="result.php">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <h2>Pessoa <?php echo $i; ?></h2>
            <label for="nome<?php echo $i; ?>">Nome:</label>
            <input type="text" name="pessoas[<?php echo $i; ?>][nome]" id="nome<?php echo $i; ?>" required><br><br>

            <label for="cidade<?php echo $i; ?>">Cidade:</label>
            <input type="text" name="pessoas[<?php echo $i; ?>][cidade]" id="cidade<?php echo $i; ?>" required><br><br>

            <label for="idade<?php echo $i; ?>">Idade:</label>
            <input type="number" name="pessoas[<?php echo $i; ?>][idade]" id="idade<?php echo $i; ?>" required><br><br>

            <label for="sexo<?php echo $i; ?>">Sexo:</label>
            <select name="pessoas[<?php echo $i; ?>][sexo]" id="sexo<?php echo $i; ?>" required>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select><br><br>
        <?php endfor; ?>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>