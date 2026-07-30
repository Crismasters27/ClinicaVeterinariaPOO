<?php
    namespace Projeto\ti23t\View;
    require_once('../Model/Animal.php');
    require_once('../Control/AnimalControl.php');
    include('cabecalho.php');
    use Projeto\ti23t\Model\Animal;
    use Projeto\ti23t\Control\Control;

    session_start();
    $animalRecuperado = $_SESSION['animal'] ?? null;
    $mensagens = [];

        if($animalRecuperado){
            $controle = new Control($animalRecuperado);

            if(isset($_POST['nome'])){
                $mensagens[] = $controle->atualizarNome($_POST['nome']);
                $mensagens[] = $controle->atualizarEspecie($_POST['especie']);
                $mensagens[] = $controle->atualizarRaca($_POST['raca']);
                $mensagens[] = $controle->atualizarIdade((int)$_POST['idade']);
                $mensagens[] = $controle->atualizarTutor($_POST['tutor']);
                $_SESSION['animal'] = $animalRecuperado;
            }
        }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Animal</title>
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
                <h1 class="h4 mb-4">Atualizar Animal</h1>

                <?php if(!$animalRecuperado): ?>
                    <div class="alert alert-warning">Nenhum animal cadastrado na sessão ainda.</div>
                <?php else: ?>
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Código</label>
                            <input type="number" class="form-control" value="<?php echo $animalRecuperado->codigo; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" value="<?php echo $animalRecuperado->nome; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Espécie</label>
                            <input type="text" name="especie" class="form-control" value="<?php echo $animalRecuperado->especie; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Raça</label>
                            <input type="text" name="raca" class="form-control" value="<?php echo $animalRecuperado->raca; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Idade</label>
                            <input type="number" name="idade" class="form-control" value="<?php echo $animalRecuperado->idade; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tutor</label>
                            <input type="text" name="tutor" class="form-control" value="<?php echo $animalRecuperado->tutor; ?>">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Atualizar</button>
                    </form>

                    <?php if($mensagens): ?>
                        <div class="alert alert-success mt-3">
                            <?php echo implode('<br>', $mensagens); ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <a href="../index.php" class="btn btn-link mt-2">Voltar</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>