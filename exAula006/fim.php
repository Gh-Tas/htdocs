<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header><h1>Dados</h1></header>
        <main>
            <article>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
                    $name =$_POST["nome"];
                    $email =$_POST["email"];
                    $phone = $_POST["telefone"];
                    $street =$_POST["rua"];
                    $complement =$_POST["complemento"];
                    $city =$_POST["cidade"];
                    $stat =$_POST["estado"];
                    $cep =$_POST["cep"];
        
                    echo "<p><strong>Nome:</strong></p>$name <br>";
                    echo "<p><strong>Email:</strong></p> $email <br>";
                    echo "<p><strong>Telefone:</strong></p> $phone <br>";
                    echo "<p><strong>Endereço:</strong></p> $street <br>";
                    echo "<p><strong>Complemento:</strong></p> $complement <br>";
                    echo "<p><strong>Cep:</strong></p> $cep <br>";
                }
                ?>
            </article>
        </main>
</body>
</html>
