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
    <title>Produção</title>
</head>
<body>
<h1 class="Fbarra">Produção</h1>
    <div class="tab">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID do Produtor</th>
                    <th scope="col">ID do Filme</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $QUERY=pg_query($conn,"SELECT * FROM produz");
        
                    while($user_data = pg_fetch_assoc($QUERY)){
                        echo "<tr>";
                        echo "<td>".$user_data['produtor']."</td>";
                        echo "<td>".$user_data['filme']."</td>";
                        echo "</tr>";
                    }
                
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>