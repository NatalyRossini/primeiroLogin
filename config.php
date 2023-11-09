<?php //CONEXÃO COM BD
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE','cliente'); //nome da base

    $conn = new mysqli (HOST, USER, PASS, BASE);

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }
?>

