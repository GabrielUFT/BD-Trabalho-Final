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
    <h1 class="Fbarra">Diretores</h1>
    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['CadUsuario'])){
        var_dump($dados);
        $query_diretor =  "INSERT INTO diretor (dir_id, full_name) VALUES ('" . $dados['dir_id']."', '" . $dados['full_name']."') ";
        $cad_diretor = pg_query($conn, $query_diretor) or die('Query failed: ' . pg_last_error()); 
    }
    ?>
    <form name="cad-diretores" method="POST" action="">
        <label class="names">Diretor: </label>
        <input type="text" name="dir_id" id="dir_id" placeholder="Identificação do Diretor" class="inputs"> 
        <label class="names">Nome: </label>
        <input type="text" name="full_name" id="full_name" placeholder="Nome do Diretor" class="inputs"> 
        <input type="submit" value="Cadastrar" name="CadUsuario" class="btn">

        
        
    </form>
</body>
</html>


