<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Fomulário de Cadastro</h1>
    </header>
        <section>
            <form action="fim.php" method="post">
                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="idnome" required> <br><br>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="idemail"><br><br>
                        <label for="telefone">Número de telefone</label>
                        <input type="tel" name="telefone" id="idtelefone"><br><br>
                        <label for="rua">Rua</label>
                        <input type="text" name="rua" id="idrua" required><br><br>
                        <label for="complemento">Complemento</label>
                        <input type="text" name="complemento" id="idcomplemento" required><br><br>
                        <label for="cidade">Cidade</label>
                        <input type="text" name="cidade" id="idcidade" required><br><br>
                        <label for="estado">Estado</label>
                        <input type="text" name="estado" id="idestado" required><br><br>
                        <label for="cep">Cep</label>
                        <input type="text" name="cep" id="idcep" required><br><br>
                        <input type="submit" value="Enviar">
                    </div>
            </form>
        </section>
</body>
</html>