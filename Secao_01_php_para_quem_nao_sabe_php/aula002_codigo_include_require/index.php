<?php
require "dados.php"
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=  $titulo_pagina ?></title>
    <!-- Bootstrap 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"crossorigin="anonymous"></script>
    <!-- CSS -->
    
</head>

<body>
    <div class="container">
    
        <header>
            <h1>PHP - Home</h1>
            <p>
                Bem-vindo, <b><?= $usuario ?></b>
            </p>
        </header>
        <hr>

        <article>
            <h3>
                <?= $titulo_artigo ?>
            </h3>
            <p>
                <?= $texto_artigo ?>
            </p>
        </article>
    
    </div>
</body>

</html>