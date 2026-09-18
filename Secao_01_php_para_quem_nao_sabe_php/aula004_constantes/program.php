<?php

/*
    — Constantes em PHP:

        Uma constante é um identificador (nome) para um valor simples. Como o nome sugere, esse valor não pode mudar durante a execução do script (exceto para as constantes mágicas, que na verdade não são constantes). As constantes diferenciam maiúsculas de minúsculas. Por convenção, identificadores de constantes são sempre em maiúsculas.
*/

// CONSTANTES
define('NOME','Erick');


// Verifica se uma constante foi definida:
if (defined('NOME')) {
    echo "Constante definida.";
}
else {
    echo "Constante não definida.";
}
echo "\n";