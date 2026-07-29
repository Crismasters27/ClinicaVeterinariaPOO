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
    $controle = new Control($animalRecuperado);//Para acessar os métodos de atualização
    $resultado = 0;//Instanciar ou Setar o valor inicial
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Animal</title>
</head>
<body>
    <h1>Excluir Animal</h1>
    <?php echo "Deseja excluir o animal: ".$animalRecuperado->codigo."?"?>
    <form method="POST">
        <button type="submit">Excluir
            <?php
                
                $resultado = $controle->excluir();   
            ?>
        </button>   
    </form>
    <?php
        if($resultado == 1){
            echo "Excluído com sucesso!";
        }else{
            echo "Aperte o botão para confirmar a exclusão!";
        }
    ?>
    <a href="../index.php"><button>Voltar</button></a>
</body>
</html>