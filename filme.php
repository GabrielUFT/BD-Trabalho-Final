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
    <div class="Fbarra"><h1 class="TituloFilme">Filmes</h1></div> <br> <br>
    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['CadUsuario'])){
        var_dump($dados);
        $query_filme =  "INSERT INTO filme (diretor, prota1, prota2, titulo) VALUES ('" . $dados['diretor']."', '" . $dados['prota1']."', '" . $dados['prota2']."', '" . $dados['titulo']."') ";
        $cad_filme = pg_query($conn, $query_filme) or die('Query failed: ' . pg_last_error()); 
    }
    ?>
    <form name="cad-filmes" method="POST" action="">
        <label class="names">Identificação do diretor </label>
        <input  type="text" name="diretor" id="diretor" placeholder="Identificação do Diretor" class="inputs">
        <label class="names">Identificação do primeiro protagonista </label>
        <input type="text" name="prota1" id="prota1" placeholder="Primeiro Protagonista" class="inputs"> 
        <label class="names">Identificação do segundo protagonista </label>
        <input type="text" name="prota2" id="prota2" placeholder="Segundo Protagonista" class="inputs"> 
        <label class="names">Titulo do filmes </label>
        <input type="text" name="titulo" id="titulo" placeholder="Titulo do Filme" class="inputs"> 
        <input type="submit" value="Cadastrar" name="CadUsuario" class="btn">

        
        
    </form>
</body>
</html>


