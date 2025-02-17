<?php
    $userFistName = "Guilherme";
    $userLastName = "Melo";
    $userAge = 20;

    echo "<p> Bom dia, meu nome é {$userFistName} {$userLastName},
    <span class='tag'> Tenho {$userAge} anos </span></p>";

    $userEmail = "guilhermemelo@gmail.com";
    echo "<p> $userEmail </p>";

    $company = "SENAI";
    $$company = "SERVIÇO NACIONAL DE APRENDIZAGEM INDUSTRIAL";
    echo "<p> {$company} {$SENAI} </p>";

    $string = "Olá mundo!"; //texto
    $array = [$string];
    $object = new stdClass(); //P00 (Programação orientada a objeto)
    $null = null; //nulo
    $int = 1;
    $bool = true;
    $float = 5.15; //Números decimais
    var_dump($array, $object, $null, $int, $bool, $float);

    $relateA = 5;
    $relateB = 6;
    $relateC = 7;
    $related = [
        "a == b" => ($relateA == $relateB),
        "a === b" => ($relateA === $relateB),
        "a != b" => ($relateA != $relateB),
    ];
    var_dump($related);

echo  "<pre>", print_r($related, true), "</pre>";

    $calcA = 5;
    $calcB = 10;
    $calc = [
      "a + b" => ($calcA + $calcB),
      "a - b" => ($calcA - $calcB),
      "a * b" => ($calcA * $calcB),
      "a / b" => ($calcA / $calcB),
      "a % b" => ($calcA % $calcB),
    ];
    var_dump($calc);

    echo  "<pre>", print_r($calc, true), "</pre>";