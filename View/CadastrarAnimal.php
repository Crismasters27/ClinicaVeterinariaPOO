<?php
    namespace Projeto\ti23t\View;
    require_once('../Model/Cliente.php');
    require_once('../Control/ClienteControl.php');
    use Projeto\ti23t\Model\Cliente;
    use Projeto\ti23t\Control\Control;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form method="POST">
        <label>Código:</label>
        <input type="number" name="codigo" id="codigo"/><br><br>

        <label>Nome:</label>
        <input type="text" name="nome" id="nome"/><br><br>

        <label>Telefone: </label>
        <input type="text" name="telefone" id="telefone"/><br><br>

        <label>Endereço: </label>
        <input type="text" name="endereco" id="endereco"/><br><br>

        <label>Data de Nascimento: </label>
        <input type="date" name="dataDeNascimento" id="dataDeNascimento"/><br><br>

        <button type="submit">Cadastrar
            <?php 
                session_start();
                //Coletando os dados             
                if(isset($_POST['codigo'])){
                    $codigo           = $_POST['codigo'];
                    $nome             = $_POST['nome'];
                    $telefone         = $_POST['telefone'];
                    $endereco         = $_POST['endereco'];
                    $dataDeNascimento = $_POST['dataDeNascimento'];
                    //Passando no objeto Cliente
                    $cliente = new Cliente($codigo, $nome, $telefone, $endereco, $dataDeNascimento);                   
                    //A sessão pode ser utilizada para transferir dados de uma tela para outra
                    //Transferindo o Objeto Todo
                    $_SESSION["cliente"] = $cliente;
                }
            ?>
        </button>
    </form>
    <?php
        if(isset($_POST['codigo']))
        {
            echo "Cadastrado com sucesso!";
        }else{
            echo "Preencha os campos!";
        }
    ?>
    <a href="../index.php"><button>Voltar</button></a>
</body>
</html>