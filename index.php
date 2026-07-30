<?php
    namespace Projeto\ti23t;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Veterinária</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            background-image: url('assets/Clinica.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
      <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">🐾 Clínica Veterinária</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="View/cadastrar.php">Cadastrar</a></li>
            <li class="nav-item"><a class="nav-link" href="View/consultar.php">Consultar</a></li>
            <li class="nav-item"><a class="nav-link" href="View/atualizar.php">Atualizar</a></li>
            <li class="nav-item"><a class="nav-link" href="View/excluir.php">Excluir</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center" style="min-height:70vh;">
        <div class="card shadow-lg p-4" style="width:100%; max-width:480px;">
            <div class="card-body text-center">
                <h1 class="mb-2">🐾 Animais</h1>
                <p class="text-muted mb-4">Sistema de cadastro de animais</p>

                <div class="d-grid gap-2">
                    <a href="View/cadastrarAnimal.php" class="btn btn-primary">Cadastrar Animal</a>
                    <a href="View/consultarAnimal.php" class="btn btn-outline-primary">Consultar Animal</a>
                    <a href="View/atualizarAnimal.php" class="btn btn-outline-primary">Atualizar Animal</a>
                    <a href="View/excluirAnimal.php" class="btn btn-outline-danger">Excluir Animal</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center align-items-center" style="min-height:70vh;">
        <div class="card shadow-lg p-4" style="width:100%; max-width:480px;">
            <div class="card-body text-center">
                <h1 class="mb-2">🩺 Veterinário</h1>
                <p class="text-muted mb-4">Sistema de cadastro de veterinários</p>

                <div class="d-grid gap-2">
                    <a href="View/cadastrarVeterinário.php" class="btn btn-primary">Cadastrar Veterinário</a>
                    <a href="View/consultarVeterinário.php" class="btn btn-outline-primary">Consultar Veterinário</a>
                    <a href="View/atualizarVeterinário.php" class="btn btn-outline-primary">Atualizar Veterinário</a>
                    <a href="View/excluirVeterinário.php" class="btn btn-outline-danger">Excluir Veterinário</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>