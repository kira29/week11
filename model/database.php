<?php
    $dsn = "mysql:host=sql2.njit.edu;dbname=pap72";
    $username = "pap72";
    $password = "jDEw5gSAE";

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>