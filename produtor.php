<?php
include_once "./connection.php";
?>
<!DOCTYPE html><?php
include_once "./connection.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <h1 class="Fbarra">Produtores</h1>
    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['CadUsuario'])){
        var_dump($dados);
        $query_Produtor =  "INSERT INTO Produtor (prod_id, full_name) VALUES ('" . $dados['prod_id']."', '" . $dados['full_name']."') ";
        $cad_Produtor = pg_query($conn, $query_Produtor) or die('Query failed: ' . pg_last_error()); 
    }
    ?>
    <form name="cad-Produtores" method="POST" action="">
        <label class="names">Produtor: </label>
        <input type="text" name="prod_id" id="prod_id" placeholder="Identificação do Produtor" class="inputs"> 
        <label class="names">Nome: </label>
        <input type="text" name="full_name" id="full_name" placeholder="Nome do Produtor" class="inputs"> 
        <input type="submit" value="Cadastrar" name="CadUsuario" class="btn">

        
        
    </form>
</body>
</html>


