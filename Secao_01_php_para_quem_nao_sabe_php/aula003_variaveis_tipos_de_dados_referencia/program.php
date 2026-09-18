<?php

/*
    — Variáveis, tipo de dados e referência.
        https://www.php.net/manual/pt_BR/language.variables.basics.php

        As variáveis no PHP são representadas por um cifrão ($) seguido pelo nome da variável.
        Os nomes de variável são sensíveis a maiúsculas e minúsculas.

        •● Como declarar:
            • Comece sempre com o cifrão ($).
            • Use uma letra ou sublinhado (_) após o cifrão.
            • O PHP diferencia maiúsculas de minúsculas ($nome é diferente de $Nome)

    A função gettype() retorna o tipo da variável.
*/

// string:
echo gettype('Texto') . '(Texto)';
echo "\n";


// numbers - integer e double (float):
echo gettype(12) . '(12)';
echo "\n";
echo gettype(12.34) . '(12.34)';
echo "\n";


// boolean:
echo gettype(false) . '(false)';
echo "\n";
echo gettype(true) . '(true)';
echo "\n";


// arrays:
echo gettype([]) . '([])';
echo "\n";


// object:
class Person {
    // Objeto...
}

echo gettype(new Person) . '(Person)';
echo "\n";


// null:
echo gettype(null) . '(null)';
echo "\n";


/* ********************************************* 
Variáveis */

$nomeCompleto = 'Erick Ferreira';
$idade = 39;
$salario = 6534.79;


// Passando valor por referência (&$variavel):
$nome = &$nomeCompleto;
echo $nome;
echo "\n";

$nomeCompleto = 'Lucas Vasconcelos';

echo $nomeCompleto;
echo "\n";

echo $nome;
echo "\n";