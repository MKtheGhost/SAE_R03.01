<?php

$dsn = "mysql:host=localhost;dbname=fnapsy";
$dbusername = "root";
$dbpassword = "";

try {
    //create a pdo object to regulate database connection
    $conn = new PDO($dsn, $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected successfully";
} catch (PDOException $e) {
    echo "Connection failed : ".$e->getMessage();
}
