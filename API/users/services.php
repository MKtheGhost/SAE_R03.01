
<?php
function create_user($params){

    $response = [];
    $result = [];

    $dirpath = __DIR__."\..\..\Data\\";
    include($dirpath."DBConnect.php");

        if (isset($conn)) {

            if (isset($params)) {
                $query = "INSERT INTO users (userId, userName, userSurname, userGrade, userPassword, isQuestionned, userEmail)";
                $query .= "VALUES (null,?,?,?,?,?,?)";

                $stmt = $conn->prepare($query);
    
                $stmt->bindValue(1, $params["name"], PDO::PARAM_STR);
                $stmt->bindValue(2, $params["surname"], PDO::PARAM_STR);
                $stmt->bindValue(3, $params["grade"], PDO::PARAM_STR);
                $stmt->bindValue(4, $params["password"], PDO::PARAM_STR);
                $stmt->bindValue(5, 0, PDO::PARAM_INT);
                $stmt->bindValue(6, $params["email"], PDO::PARAM_STR);
    
                if ($stmt !== false) {
                    if ($stmt->execute()) {
                        $response["state"] = "success";
                        $result["grade"] = $params["grade"];
                        $response["result"] = $result;
                        $response["result"]["userid"] = $conn->lastInsertId();
                    }
                } else {
                    //Query or Bind Error
                    $response["state"] = "error";
                    $response["message"] = "query or bind error in create user";

                }           

            }
        }

        $dirpath = __DIR__."\..\..\Data\\";
        //include($dirpath."DBClose.php");
        return $response;
    }


?>