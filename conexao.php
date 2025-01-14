<?php
    define('HOST', 'hardware.mysql.dbaas.com.br');
    define('USER','hardware');
    define('PASSWORD',  'Si900970@#');
    define('BASE','hardware');

    $conn = new MySQLi(HOST,USER,PASSWORD,BASE);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    
?>