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
    <h1 class="Fbarra">Elenco</h1>
    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['CadUsuario'])){
        $query_elenco =  "INSERT INTO atua_em (ator,papel,filme) VALUES ('" . $dados['ator']."', '" . $dados['papel']."', '" . $dados['filme']."') ";
        $cad_elenco = pg_query($conn, $query_elenco) or die('Query failed: ' . pg_last_error()); 
    }
    ?>
    <form name="cad-elencos" method="POST" action="">
        <label class="names">Papel: </label>
        <input type="text" name="papel" id="papel" placeholder="Nome do personagem" class="inputs"> 
        <label class="names">Ator: </label>
        <input type="text" name="ator" id="ator" placeholder="Identificação do ator" class="inputs"> 
        <label class="names">Filme: </label>
        <input type="text" name="filme" id="filme" placeholder="Identificação do filme" class="inputs"> 
        <input type="submit" value="Cadastrar" name="CadUsuario" class="btn">

        
        
    </form>
</body>
</html>


