<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $calendario = [
        'Janeiro',
        'Fevereiro',
        'Março',
        'Abril',
        'Maio',
        'Junho',
        'Julho',
        'Agosto',
        'Setembro',
        'Outubro',
        'Novembro',
        'Dezembro'
    ];

    $num = -1 + $_POST['mes'];

    echo "O mês selecionado foi " . "<Strong>" . $calendario[$num] . "</Strong>";
}
