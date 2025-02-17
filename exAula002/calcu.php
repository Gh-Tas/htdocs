<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$a = $_POST["num1"];
$b = $_POST["num2"];
$op = $_POST["operacao"];

switch ($op) {
    case "+":
        $c = $a + $b;
        echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
        break;
    case "-":
        $c = $a - $b;
        echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
        break;
    case "*":
        $c = $a * $b;
        echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
        break;
    case "/":
        $c = $a / $b;
        echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
        break;
    case "%":
        $c = $a % $b;
        echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
        break;
    case "**":
        $c = $a ** $b;
        echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
        break;
}
}