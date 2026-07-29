<?php
    namespace Projeto\ti23t\View;
    include('cabecalho.php');
    require_once('../Model/Animal.php');
    require_once('../Control/AnimalControl.php');
    use Projeto\ti23t\Model\Animal;
    use Projeto\ti23t\Control\Control;

    session_start();
    //Coletar o objeto
    $animalRecuperado = $_SESSION['animal'];
    $controle = new Control($animalRecuperado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Animal</title>
</head>
<body>
    <h1>Consultar Animal</h1>
    <?php
        //Chamando o método de consulta, para mostrar todos os dados do cliente cadastrado
        echo $controle->consultarAnimal();
    ?>
    <br><br>
    <a href="../index.php"><button>Voltar</button></a>
</body>
</html>