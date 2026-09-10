<?php

/* 
    — switch:

        O switch no PHP é uma estrutura de controle condicional que substitui vários if/else quando você precisa comparar a mesma variável com vários valores diferentes
*/

$greeting = 'Olá'; // Saudação
$name = 'Erick'; // Nome
$unknown = 'Quem é você?'; // Desconhecido

switch ($name) {
    case 'Alexandre':
        echo "{$greeting}, {$name}";
        break;

    case 'Erick':
        echo $unknown . ', ' . $name;
        break;

    default:
        echo $unknown;
        break;
}
