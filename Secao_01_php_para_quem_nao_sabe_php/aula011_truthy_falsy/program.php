<?php

/*
    — Truthy e Falsy:

        ● Falsy: São valores que se comportam como valores booleanos falsos, mas não são verdadeiramente valores booleanos.

            ↪ Exemplos: 
                        null    → null
                        0       → integer
                        0.0     → float
                        "0"     → string
                        ""      → empty string
                        array() → empty array
        

        ● Truthy: É todo e qualquer valor que não esteja na lista de falsy acima.

*/


// Exemplos Falsy:
var_dump(!!null);
var_dump(!!0);
var_dump(!!0.0);
var_dump(!!"0");
var_dump(!!"");
var_dump(!![]);

echo "\n";

// Exemplos Truthy:
var_dump(!!'PHP');

echo "\n";


/* ***********************
Exemplo prático */

if (!0) {
    echo "Entrou no IF";
}
else {
    echo "Entrou no ELSE";
}

echo "\n\n";