<?php
    define('HOST', 'localhost');
    define('USER','host');
    define('PASSWORD',  '');
    define('BASE','cadastro');

    $conn = new MySQLi(HOST,USER,PASSWORD,BASE);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    
?>
