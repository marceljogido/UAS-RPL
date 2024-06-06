<?php
    $dsn = 'mysql:host=localhost;dbname=restoran;charset=utf8';
    $user = 'root';
    $pass = '';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
        $con = new PDO($dsn, $user, $pass, $options);
        //echo 'Good Very Good !';
    } catch (PDOException $ex) {
        echo "Failed to connect with database! " . $ex->getMessage();
        die();
    }
?>
