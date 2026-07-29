<?php
    namespace Projeto\ti23t\View;
    include('cabecalho.php');
    require_once('../Model/Animal.php');
    require_once('../Control/AnimalControl.php');
    use Projeto\ti23t\Model\Animal;
    use Projeto\ti23t\Control\Control;
    //Iniciar a sessão
    session_start();
    $animalRecuperado = $_SESSION["animal"];
    $controle = new Control($animalRecuperado);//acessa os métodos de atualização
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Animal</title>
</head>
<body>
    <h1>Atualizar Animal</h1>
    <form method="POST">
        <label>Código: </label>
        <input type="number" name="codigo" id="codigo" value="<?php echo $animalRecuperado->codigo;?>" disabled/>
        <br>
        <label>Nome: </label>
        <input type="text" name="nome" id="nome" value="<?php echo $animalRecuperado->nome;?>"/>
        <br>
        <label>Espécie: </label>
        <input type="text" name="especie" id="especie" value="<?php echo $animalRecuperado->especie;?>"/>
        <br>
        <label>Raça: </label>
        <input type="text" name="raca" id="raca" value="<?php echo $animalRecuperado->raca;?>"/>
        <br>
        <label>Idade: </label>
        <input type="number" name="idade" id="idade" value="<?php echo $animalRecuperado->idade;?>"/>
        <br>
        <label>Tutor: </label>
        <input type="text" name="tutor" id="tutor" value="<?php echo $animalRecuperado->tutor;?>"/>
        
        <button type="submit">Atualizar
            <?php
                $resultadoNome     = $controle->atualizarNome($_POST['nome']);
                $resultadoEspecie = $controle->atualizarEspecie($_POST['especie']);
                $resultadoRaca = $controle->atualizarRaca($_POST['raca']);
                $resultadoIdade     = $controle->atualizarIdade($_POST['idade']);
                $resultadoTutor     = $controle->atualizarTutor($_POST['tutor']);  
            ?>
        </button>
    </form>
    <?php
        echo $resultadoNome."<br>".$resultadoEspecie."<br>".$resultadoRaca."<br>".$resultadoIdade."<br>".$resultadoTutor;
    ?>
    <br>
    <a href="../index.php"><button>Voltar</button></a>
</body>
</html>