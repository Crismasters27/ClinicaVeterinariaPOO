<?php
    namespace Projeto\ti23t;
    include('View/cabecalho.php');//Tentando utilizar a formatação
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Veterinária</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
    <body style="background-color:#ff00aa;">
    <form method="POST" style="text-align:center;margin:10%;background-color:#2aff00;padding:5%;">
    

    <h1>Clínica Veterinária</h1>

    <a href="View/cadastrar.php" class="btn btn-primary">Cadastrar</a>

    <a href="View/consultar.php" class="btn btn-primary">Consultar</a>

    <a href="View/atualizar.php" class="btn btn-primary">Atualizar</a>

    <a href="View/excluir.php" class="btn btn-primary">Excluir</a>

</body>
</html>