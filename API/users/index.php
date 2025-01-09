<?php

include(__DIR__."/services.php");
session_start();

main();

function main(){
    $response = [];
    $response["state"] = "error";
    $response["result"] = "404 not found";

    //get users
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["userId"])) {
            $response = request_getUser($_GET["userId"]);
        } else {
            $response = request_getUsers();
        }
    // create users       
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        $response = request_createUser();
        if ($response["state"] == "error") { 
            $_SESSION["userCreated"] = false;  
        } else if ($response["state"] == "success") {
            $_SESSION["userCreated"] = true;  
            $_SESSION["userid"] = $response["result"]["userid"];
            $_SESSION["grade"] = $response["result"]["grade"];
        }
    //update users
    }elseif ($_SERVER["REQUEST_METHOD"] == "PATCH") {
        $response = request_updateUser();
    }

    header("Location: ./../../index.php");
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

    if (isset($_POST["name"])) {
        if (isset($_POST["surname"])) {
            if (isset($_POST["email"])) {
                if (isset($_POST["grade"])) {
                    if (isset($_POST["password"])) {
                        if (isset($_POST["admin_key"]) || $_POST["grade"] == "user") {
                            if($_POST["admin_key"] == "admin") {
                                $param = $_POST;
                                $response = create_user($param);
                            }else $response["result"] = "adminkey is incorrect";
                            if($_POST["grade"] == "user") {
                                $param = $_POST;
                                $response = create_user($param);
                            }
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
                $response["result"] = "email param must be set";
            }
        }else {
            $response["result"] = "surname param must be set";
        }
    } else {
        $response["result"] = "name param must be set";
    }

    return $response;
}

function request_updateUser(){
    //get userid
    //check if userid is numerical value
    //check if userid exist in DB
    
}

