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
    <title>Produtor</title>
</head>
<body>
<h1 class="Fbarra">Produtor</h1>
    <div class="tab">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id do Produtor</th>
                    <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $QUERY=pg_query($conn,"SELECT * FROM produtor");
        
                    while($user_data = pg_fetch_assoc($QUERY)){
                        echo "<tr>";
                        echo "<td>".$user_data['prod_id']."</td>";
                        echo "<td>".$user_data['full_name']."</td>";
                        echo "</tr>";
                    }
                
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>