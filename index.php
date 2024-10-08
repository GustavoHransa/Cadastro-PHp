<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro pessoas</title>
    
</head>
<body>
    
<?php

if(isset($_POST['submit']))
{
    //print_r($_POST['nome']);
    //print_r('<br>');
    //print_r($_POST['nascimento']);
    //print_r('<br>');
    //print_r($_POST['cargo']);
    //print_r('<br>');
    //print_r($_POST['salario']);
    //print_r('<br>');
    //print_r($_POST['telefone']);

    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $telefone = $_POST['telefone'];
   
   include_once('config.php');
   $result = mysqli_query($conexao,"INSERT INTO funcionarios(nome,nascimento,cargo,salario,telefone) values ('$nome','$nascimento','$cargo','$salario','$telefone')");

}

?>

    <div class="box">
        <form action="index.php" method="post">
            <fieldset>
                <legend><b>Funcionarios</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br> <br><br>
                
                <div class="inputBox">
                    <input type="tel" name="cargo" id="cargo" class="inputUser" required>
                    <label for="cargo" class="labelInput">Cargo:</label>
                </div>
                <br><br> <br><br>
                <div class="inputBox">
                    <input type="tel" name="salario" id="salario" class="inputUser" required>
                    <label for="salario" class="labelInput">Salário:</label>
                </div>
                <br><br> <br><br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone:</label>
                </div>
                <br><br> <br><br>
                <label for="nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="nascimento" id="nascimento" required>
                <br><br><br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>