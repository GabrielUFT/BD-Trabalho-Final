<?php
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
    <h1 class="Fbarra">Atores</h1>
    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['CadUsuario'])){
        var_dump($dados);
        $query_ator =  "INSERT INTO ator (full_name,ator_id,sex,bdate) VALUES ('" . $dados['full_name']."', '" . $dados['ator_id']."', '" . $dados['sex']."', '" . $dados['bdate']."') ";
        $cad_ator = pg_query($conn, $query_ator) or die('Query failed: ' . pg_last_error()); 
    }
    ?>
    <form name="cad-atores" method="POST" action="">
        <label class="names">Identificação: </label>
        <input type="text" name="ator_id" id="ator_id" placeholder="Identificação do ator" class="inputs" > 
        <label class="names">Nome: </label>
        <input type="text" name="full_name" id="full_name" placeholder="Nome do ator" class="inputs" > 
        <label class="names">Sexo: </label>
        <input type="text" name="sex" id="sex" placeholder="Sexo" class="inputs"> 
        <label class="names">Data de Nascimento: </label>
        <input type="text" name="bdate" id="bdate" placeholder="Data de nascimento" class="inputs"> 
        <input type="submit" value="Cadastrar" name="CadUsuario" class="btn">

        
        
    </form>
</body>
</html>


