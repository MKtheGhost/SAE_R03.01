<?php

include(__DIR__."/services.php");

main();

function main(){
    $response = [];
    $response["state"] = "error";
    $response["result"] = "404 not found";


    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        //$username = $_POST["username"];
        // try {
        //     require_once "../DBConnect/DBConnect.php";
        // } catch (PDOException $e) {
        //     die("Query failed : ".$e->getMessage());
        // }
    
        // $query = "INSERT INTO users (username, pwd, email) VALUES (?,?,?);";
        // $stmt = $pdo->prepare($query);
        // $stmt->execute([$username, $password, $email]);
    
        // $pdo = null;
        // $stmt = null;
        // header("Location : ../index.php");
    
        // die();
        if (isset($_GET["userId"])) {
            $response = request_getUser($_GET["userId"]);
        } else {
            $response = request_getUsers();
        }
            
    } elseif ($_SERVER["REQUEST_METHOD"] == "PATCH") {
        $response = request_updateUser();
    } else {
        header("Location : ../index.php");
    }
}

//////////// CHECK PARAMETERS //////////////////

function request_getUser($userId) {

}

function request_getUsers() {

}

function request_updateUser(){
    
}

