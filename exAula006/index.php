<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <header>
        <h1>Fomulário de cadastro</h1>
    </header>
    <form action="fim.php" method="post">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="idnome" required> <br><br>
    <label for="email">Email</label>
    <input type="email" name="email" id="idemail"><br><br>
    <label for="telefone">Número de telefone</label>
    <input type="tel" name="telefone" id="idtelefone"><br><br>
    <label for="endereco">Endereço</label>
    <input type="text" name="endereco" id="idrua" required><br><br>
    <input type="text" name="endereco" id="idcomplemento" required><br><br>
    <input type="text" name="endereco" id="idcidade" required><br><br>
    <input type="text" name="endereco" id="idestado" required><br><br>
    <input type="text" name="endereco" id="idcep" required><br><br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>