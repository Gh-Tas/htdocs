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
                    echo "<p><strong>Rua:</strong></p> $street <br>";
                    echo "<p><strong>Cidade:</strong></p> $city <br>";
                    echo "<p><strong>Estado:</strong></p> $stat <br>";
                    echo "<p><strong>Complemento:</strong></p> $complement <br>";
                    echo "<p><strong>Cep:</strong></p> $cep <br>";

                    $folder = __DIR__ . "/Downloads/";

                    if(!file_exists($folder) || !is_dir($folder)){
                        mkdir($folder,  0755);
                    }

                    var_dump([
                        "filesize" => ini_get("upload_max_filesize"),
                        "postsize" => ini_get("post_max_size"),
                    ]);

                    $getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);
                    var_dump($_FILES);

                    if($_FILES && !empty($_FILES['file']['name'])) {
                        $fileUpload = $_FILES['file'];
                        var_dump($_FILES);
                    
                        $allowebTypes = [ 
                            "image/jpeg",
                            "image/png",
                            "application/pdf"
                        ];
                    }elseif ( $getPost){ 
                        echo "<p class='trigger warning'>Whoops parece que o arquivo que você selecionou é grande demais!</p>";
                    } else{
                       if($_FILES){
                           echo "<p class='trigger warning'>Selecione um arquivo antes de Enviar!</p>";
                       }
                    }

                    include __DIR__ . "/form.php";

                    var_dump(scandir(__DIR__ ."/Downloads"));
                }    
                ?>
            </article>
        </main>
</body>
</html>
