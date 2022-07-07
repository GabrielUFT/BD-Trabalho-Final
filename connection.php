<?php

$servidor = "localhost";

$dbname = "TrabalhoFinal";

$usuario = "postgres";

$senha ="new03522";

$port = "5432";

$conn_string = "host=$servidor port=$port dbname=$dbname user=$usuario password=$senha";

$conn = pg_connect($conn_string) or
die ("Não foi possível conectar ao servidor PostGreSQL");

?>