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
            
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        $response = request_createUser();
    }elseif ($_SERVER["REQUEST_METHOD"] == "PATCH") {
        $response = request_updateUser();
    } else {
        header("Location : ../index.php");
    }
}

//////////// CHECK PARAMETERS //////////////////

function request_getUser($userId) {
    //check if userid is a numerical value
    //check if userid exist in DB

}

function request_getUsers() {
    // no check just get all the users

}

function request_createUser(){
    $response["state"] = "error";
    $response["result"] = "";

    if (isset($_POST["username"])) {
        if (isset($_POST["password"])) {
            if (isset($_POST["grade"])) {
                if (isset($_POST["password"])) {
                    if (isset($_POST["adminkey"])) {
                        $response = create_user();
                    } else {
                        $response["result"] = "adminkey param must be set";
                    }
                } else {
                    $response["result"] = "password param must be set";
                }
            } else {
                $response["result"] = "grade param must be set";
            }
        } else {
            $response["result"] = "adminkey param must be set";
        }
    } else {
        $response["result"] = "adminkey param must be set";
    }

    return $response;
}

function request_updateUser(){
    //get userid
    //check if userid is numerical value
    //check if userid exist in DB
    
}

