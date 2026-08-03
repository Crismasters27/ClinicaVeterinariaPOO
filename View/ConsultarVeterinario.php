<?php
    namespace Projeto\ti23t\View;
    require_once('../Model/Veterinario.php');
    require_once('../Control/VeterinarioControl.php');
    include('cabecalho.php');
    use Projeto\ti23t\Model\Veterinario;
    use Projeto\ti23t\Control\Control;

    session_start();
    $veterinarioRecuperado = $_SESSION['veterinario'] ?? null;
    $controle = $veterinarioRecuperado ? new Control($veterinarioRecuperado) : null;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Veterinário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            background-image: url('../assets/wallpaper.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <div class="container" style="max-width:600px;">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="h4 mb-4">Consultar Veterinário</h1>

                <?php
                    if($controle){
                        echo '<div class="lh-lg">'.$controle->consultarVeterinario().'</div>';
                    }else{
                        echo '<div class="alert alert-warning">Nenhum veterinário cadastrado na sessão ainda.</div>';
                    }
                ?>

                <a href="../index.php" class="btn btn-link mt-2">Voltar</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>