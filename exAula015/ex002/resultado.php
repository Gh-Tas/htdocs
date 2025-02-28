<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $numeros = $_POST['numeros'];

        $negativos=0;
        $positivos=0;
        $inpares=0;
        $pares=0;
        
        foreach ($numeros as $numero) {
            if ($numero < 0) {
                $negativos++;
            }elseif ($numero > 0) {
                $positivos++;
            }

            if ($numero % 2 ===0) {
                $pares++;
            }
            else{
                $inpares++;
            }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>
    <h1>resultado</h1>
    <?php
     echo "Números negativos: " . $negativos . "<br>";
     echo "Números positivos: " . $positivos . "<br>";
     echo "Números pares: " . $pares . "<br>";
     echo "Números ímpares: " . $inpares . "<br>";
    ?>
</body>
</html>