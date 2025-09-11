<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Listar_pessoas.php" method="post">
    <label>Nome da pessoa a ser atendida:</label>
        <input type="text" name="cliente">
        <input type="submit" value="Cadastrar">
    </form>
    <h3>Lista de atendimento</h3>
    <?php
    //inserindo os clientes no arquivo atendimento.txt
    $nome_atendimento = $_POST['cliente']?? '';
    $arquivo = fopen("atendimento.txt", "a");
    fwrite($arquivo, "$nome_atendimento\n");
    fclose($arquivo);

    $arquivo = fopen("atendimento.txt", "r");
    while(!feof($arquivo)){
     echo fgets($arquivo) . "<br>";
    }
    fclose($arquivo);
    ?>
</body>
</html>