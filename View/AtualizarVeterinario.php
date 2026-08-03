<?php
    namespace Projeto\ti23t\View;
    require_once('../Model/Veterinario.php');
    require_once('../Control/VeterinarioControl.php');
    include('cabecalho.php');
    use Projeto\ti23t\Model\Veterinario;
    use Projeto\ti23t\Control\Control;

    session_start();
    $veterinarioRecuperado = $_SESSION['veterinario'] ?? null;
    $mensagens = [];

    if($veterinarioRecuperado){
        $controle = new Control($veterinarioRecuperado);

        if(isset($_POST['nome'])){
            $mensagens[] = $controle->atualizarNome($_POST['nome']);
            $mensagens[] = $controle->atualizarCrmv($_POST['crmv']);
            $mensagens[] = $controle->atualizarEspecialidade($_POST['especialidade']);
            $mensagens[] = $controle->atualizarTurno($_POST['turno']);
            $mensagens[] = $controle->atualizarTelefone($_POST['telefone']);
            $_SESSION['veterinario'] = $veterinarioRecuperado;
        }
    }

    //Opções do turno, usadas pra marcar a atual como "selected" no select
    $opcoesTurno = ['Manhã', 'Tarde', 'Noite'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Veterinário</title>
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
                <h1 class="h4 mb-4">Atualizar Veterinário</h1>

                <?php
                    if(!$veterinarioRecuperado){
                        echo '<div class="alert alert-warning">Nenhum veterinário cadastrado na sessão ainda.</div>';
                    }else{
                ?>
                    <form method="POST">
                        <div class="mb-3">
                            <label>Código:</label>
                            <input type="number" class="form-control" value="<?php echo $veterinarioRecuperado->codigo; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Nome:</label>
                            <input type="text" name="nome" class="form-control" value="<?php echo $veterinarioRecuperado->nome; ?>">
                        </div>
                        <div class="mb-3">
                            <label>CRMV:</label>
                            <input type="number" name="crmv" class="form-control" value="<?php echo $veterinarioRecuperado->crmv; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Especialidade:</label>
                            <input type="text" name="especialidade" class="form-control" value="<?php echo $veterinarioRecuperado->especialidade; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Turno:</label>
                            <select name="turno" class="form-select">
                                <?php foreach($opcoesTurno as $opcao): ?>
                                    <?php
                                        $selecionado = ($opcao == $veterinarioRecuperado->turno) ? 'selected' : '';
                                        echo "<option value=\"$opcao\" $selecionado>$opcao</option>";
                                    ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Telefone:</label>
                            <input type="number" name="telefone" class="form-control" value="<?php echo $veterinarioRecuperado->telefone; ?>">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Atualizar</button>
                    </form>

                    <?php
                        if($mensagens){
                            echo '<div class="alert alert-success mt-3">'.implode('<br>', $mensagens).'</div>';
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