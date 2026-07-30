<?php
    namespace Projeto\ti23t\View;
    require_once('../Model/Veterinario.php');
    require_once('../Control/VeterinarioControl.php');
    include('cabecalho.php');
    use Projeto\ti23t\Model\Veterinario;
    use Projeto\ti23t\Control\Control;

    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Veterinário</title>
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
<body>
    <div class="container" style="max-width:600px;">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="h4 mb-4">Cadastrar Animal</h1>

                <form method="POST">
                    <div class="mb-3">
                        <label>Código:</label>
                        <input type="number" name="codigo" id="codigo" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Nome:</label>
                        <input type="text" name="nome" id="nome" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>CRMV:</label>
                        <input type="number" name="crmv" id="crmv" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Especialidade:</label>
                        <input type="text" name="especialidade" id="especialidade" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Turno:</label>
                        <input type="text" name="turno" id="turno" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label>Telefone:</label>
                        <input type="number" name="telefone" id="telefone" class="form-control"/>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
                </form>

                <?php
                session_start();

                $cadastrado = false;

                if(isset($_POST['codigo'])){
                    $codigo  = $_POST['codigo'];
                    $nome    = $_POST['nome'];
                    $especie = $_POST['especie'];
                    $raca    = $_POST['raca'];
                    $idade   = $_POST['idade'];
                    $tutor   = $_POST['tutor'];

                    $animal = new Animal($codigo, $nome, $especie, $raca, $idade, $tutor);
                    $_SESSION["animal"] = $animal;
                    $cadastrado = true;
                }
                ?>

                <?php
                    if($cadastrado){
                        echo '<div class="alert alert-success mt-3">Cadastrado com sucesso!</div>';
                    }else{
                        echo '<div class="alert alert-secondary mt-3">Preencha os campos!</div>';
                    }
                ?>

                <a href="../index.php" class="btn btn-link mt-2">Voltar</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>