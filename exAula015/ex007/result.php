<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pessoas = $_POST["pessoas"];

    echo "<h1>Lista de pessoas e idades</h1>";
    echo "<ul>";
    foreach ($pessoas as $pessoa){
        echo "<li>Nome: " . $pessoa['nome'] . " Idade: " . $pessoa['idade'] . "</li>";
    }
    echo "</ul>";

    echo "<h1>Lista de pessoas de Santos</h1>";
    echo"<ul>";
    foreach ($pessoas as $pessoa){
        if (strtolower($pessoa['cidade']) == "santos"){
            echo "<li>" . $pessoa['nome'] . "</li>";
        }
    }
    echo "</ul>";

    echo "<h1>Lista de pessoas com mais de 18 anos</h1>";
    echo "<ul>";
    foreach ($pessoas as $pessoa){
        if ($pessoa['idade'] > 18){
            echo "<li>" . $pessoa['nome'] . "</li>";
        }
    }
    echo "</ul>";

    $masculino = 0;
    foreach ($pessoas as $pessoa){
        if ($pessoa['sexo'] === "M"){
            $masculino++;
        }
    }
    echo "<h1> Pessoas do sexo masculino: " . $masculino . "</h1>";
}
?>