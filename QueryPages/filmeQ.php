<?php
include_once "../connection.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/styleQuery.css">
    <link rel="stylesheet" href="../Styles/style.css">
    <title>Filme</title>
</head>
<body>
<h1 class="Fbarra">Filmes</h1>
    <div class="tab">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Identificação do Filme</th>
                    <th scope="col">Protagonista 1</th>
                    <th scope="col">Protagonista 2</th>
                    <th scope="col">Diretor</th>
                    <th scope="col">Titulo</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php
                    $QUERY=pg_query($conn,"SELECT * FROM filme");
        
                    while($user_data = pg_fetch_assoc($QUERY)){
                        echo "<td>".$user_data['filme_id']."</td>";
                        echo "<td>".$user_data['prota1']."</td>";
                        echo "<td>".$user_data['prota2']."</td>";
                        echo "<td>".$user_data['diretor']."</td>";
                        echo "<td>".$user_data['titulo']."</td>";
                        echo "</tr>";
                    }
                
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>