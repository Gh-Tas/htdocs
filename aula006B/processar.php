<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") { // POST é uma variavel definida do PHP,
    // que serve para coletar dados de formularios html
    // Recupera os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Exibe os dados recebidos
    echo "<h2>Dados Recebidos:</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Mensagem:</strong> $mensagem</p>";
} else {
    // Se não for enviado via POST, redireciona para o formulário
    header("Location: formulario.html"); //serve para redirecionarmos para a pagina
    exit();
}
?>