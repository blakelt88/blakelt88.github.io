<?php
    $dsn = 'mysql:host=localhost;dbname=aplaceo3_guitar1';
    $username = 'aplaceo3_iClient';
    $password = 'Circa7578';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>