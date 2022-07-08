<?php
include_once "../connection.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/style.css">
    <title>Cadastro</title>
</head>
<body>
    <h1 class="Fbarra">Produção</h1>
    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['CadUsuario'])){
        $query_producao =  "INSERT INTO produz (produtor,filme) VALUES ('" . $dados['produtor']."', '" . $dados['filme']."') ";
        $cad_producao = pg_query($conn, $query_producao) or die('Query failed: ' . pg_last_error()); 
    }
    ?>
    <form name="cad-producoes" method="POST" action="">
        <label class="names">Produtor: </label>
        <input type="text" name="produtor" id="produtor" placeholder="Identificação do Produtor" class="inputs"> 
        <label class="names">Filme: </label>
        <input type="text" name="filme" id="filme" placeholder="Identificação do filme" class="inputs"> 
        <input type="submit" value="Cadastrar" name="CadUsuario" class="btn">

        
        
    </form>
</body>
</html>


