<?php
//pøipojení k databázi

    $servername = "localhost";
    $username = "root";
    $password = "DDM9";
    $dbname = "trhlikj";

    try {
        //navaze se pripojeni
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOexeption $error) {
        echo $error->getMessage();
        exit;
    }

?>