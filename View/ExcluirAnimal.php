<?php
    namespace Projeto\ti23t\View;
    require_once('../Model/Animal.php');
    require_once('../Control/AnimalControl.php');
    include('cabecalho.php');
    use Projeto\ti23t\Model\Animal;
    use Projeto\ti23t\Control\Control;

    session_start();
    $animalRecuperado = $_SESSION['animal'] ?? null;
    $resultado = 0;

    if($animalRecuperado){
        if(isset($_POST['excluir'])){
            $controle = new Control($animalRecuperado);
            $resultado = $controle->excluir();
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Animal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            background-image: url('../assets/Clinica.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container" style="max-width:600px;">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="h4 mb-4">Excluir Animal</h1>
                <?php
                    if(!$animalRecuperado){
                        echo '<div class="alert alert-warning">Nenhum animal cadastrado na sessão ainda.</div>';
                    }else{
                ?>
                    <p>Deseja excluir o animal: <strong><?php echo $animalRecuperado->codigo; ?></strong>?</p>

                    <form method="POST">
                        <button type="submit" name="excluir" class="btn btn-danger w-100">Excluir</button>
                    </form>

                    <?php
                        if($resultado == 1){
                            echo '<div class="alert alert-success mt-3">Excluído com sucesso!</div>';
                        }else{
                            echo '<div class="alert alert-secondary mt-3">Aperte o botão para confirmar a exclusão!</div>';
                        }
                    ?>
                <?php } ?>

                <a href="../index.php" class="btn btn-link mt-2">Voltar</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>