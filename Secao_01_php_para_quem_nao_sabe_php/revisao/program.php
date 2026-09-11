<?php

$data = array('Alexandre','Maria','João',34, 33.3,false,true);
var_dump($data);
echo "\n";

$person = [
    'name' => 'Alexandre',
    'age' => 38,
    'documents' => [
        'cpf' => '32517350695',
        'rg' => '820495873',
        'outro array' => [
            1,2,3,4,5,6
        ]
    ]
];

print_r($person);