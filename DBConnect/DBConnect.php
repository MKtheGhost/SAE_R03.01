<?php

$dsn = "mysql:host=localhost,dbname=fnapsy";
$dbusername = "root";
$dbpassword = "";

try {
    //create a pdo object to regulate database connection
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed : ".$e->getMessage();
}
