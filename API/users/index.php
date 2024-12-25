<?php

include(__DIR__."/services.php");

main();

function main(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //$username = $_POST["username"];
        try {
            require_once "../DBConnect/DBConnect.php";
        } catch (PDOException $e) {
            die("Query failed : ".$e->getMessage());
        }
    
        $query = "INSERT INTO users (username, pwd, email) VALUES (?,?,?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $password, $email]);
    
        $pdo = null;
        $stmt = null;
        header("Location : ../index.php");
    
    
        die();
    
    }else {
        header("Location : ../index.php");
    }
}

