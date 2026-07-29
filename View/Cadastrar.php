<?php
    namespace Projeto\ti23t\View;
    include('cabecalho.php');
    require_once('../Model/Animal.php');
    require_once('../Control/AnimalControl.php');
    
    use Projeto\ti23t\Model\Animal;
    use Projeto\ti23t\Control\Control;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Animal</title>
</head>
<body>
    <h1>Cadastrar Animal</h1>
    <form method="POST">

        <label>Código:</label>
        <input type="number" name="codigo" id="codigo"/>
        <br><br>

        <label>Nome:</label>
        <input type="text" name="nome" id="nome"/>
        <br><br>

        <label>Espécie:</label>
        <input type="text" name="especie" id="especie"/>
        <br><br>

        <label>Raça:</label>
        <input type="text" name="raca" id="raca"/>
        <br><br>

        <label>Idade:</label>
        <input type="number" name="idade" id="idade"/>
        <br><br>

        <label>Tutor:</label>
        <input type="text" name="tutor" id="tutor"/>
        <br><br>

        <button type="submit">Cadastrar
            <?php
                session_start();
                if(isset($_POST['codigo'])){
                    $codigo = $_POST['codigo'];
                    $nome = $_POST['nome'];
                    $especie = $_POST['especie'];
                    $raca = $_POST['raca'];
                    $idade = $_POST['idade'];
                    $tutor = $_POST['tutor'];
                    $animal = new Animal($codigo, $nome, $especie, $raca, $idade, $tutor);
                    $_SESSION["animal"] = $animal;
                }
            ?>
        </button>
    </form>
    <?php
        if(isset($_POST['codigo'])){
            echo "Animal cadastrado com sucesso!";
        }else{
            echo "Preencha os campos!";
        }
    ?>
    <br><br>
    <a href="../index.php"><button>Voltar</button></a>

</body>
</html>