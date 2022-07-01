<?php
include_once "./connection.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Filmes</h1>
    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['CadUsuario'])){
        var_dump($dados);
        $query_filme =  "INSERT INTO filme (diretor, prota1, prota2, titulo) VALUES ('" . $dados['diretor']."', '" . $dados['prota1']."', '" . $dados['prota2']."', '" . $dados['titulo']."') ";
        $cad_filme = pg_query($conn, $query_filme) or die('Query failed: ' . pg_last_error()); 
    }
    ?>
    <form name="cad-filmes" method="POST" action="">
        <label>Diretor: </label>
        <input type="text" name="diretor" id="diretor" placeholder="identificação do Diretor"> <br> <br>
        <label>Prota 1: </label>
        <input type="text" name="prota1" id="prota2" placeholder="Primeiro Protagonista"> <br> <br>
        <label>Prota 2: </label>
        <input type="text" name="prota2" id="prota2" placeholder="Segundo Protagonista"> <br> <br>
        <label>Titulo: </label>
        <input type="text" name="titulo" id="titulo" placeholder="Titulo do Filme"> <br> <br>
        <input type="submit" value="Cadastrar" name="CadUsuario">

        
        
    </form>
</body>
</html>


