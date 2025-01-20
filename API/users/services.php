
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
        include($dirpath."DBClose.php");
        return $response;
}

function getUsersFromWhereBind($params){
    $bindStr = "";
    $bindParams = [];
    
    $query = " FROM users";
    $wherequery = "";
    if (!empty($params['id'])){
        $wherequery .= " WHERE id=?";
        $bindStr .= "i";
        $bindParams[] = $params['id'];
    } else {
        if (!empty($params['name'])){
            $wherequery .= !empty($wherequery) ? " AND ":" WHERE ";
            $wherequery .= "name LIKE CONCAT( '%', ?, '%')";
            $bindStr .= "s";
            $bindParams[] = $params["name"];
        }
    }
    $query .= $wherequery . " ORDER BY NAME;";

    $result = [$query,$bindStr,$bindParams];
    return $result;
}

function getSpecificBindQuery($params){
    //1 - get the basic FROM...WHERE... part of the query
    $result=[];
    [$FromWhereClause,$bindStr,$bindParams] = getUsersFromWhereBind($params);

    $query = "SELECT ";
    $query .= $FromWhereClause;

    $result = [$query,$bindStr,$bindParams];
    return $result;
}

function fillResponseFromQueryResults($queryresult){

    $response = [];
    $response["state"] = "error";
    $response["result"] = [];

    while ($row = mysqli_fetch_assoc($queryresult)) {
        $response["state"] = "success";
        $response["result"][] = $row;
    }
    return $response;
}

    
function getUsers($params){
    
    $response = [];
    $response["state"] = "error";
    $response["result"]= [];

    $dirpath = __DIR__."\..\..\Data\\";
    include($dirpath."DBConnect.php");

    if (isset($conn)) {
        //specific queries for each stat
        [$query,$bindStr,$bindParams] = getSpecificBindQuery($params);
        $stmt = $conn->prepare($query);
        if ($stmt !== false) {
            if (!empty($bindStr)){
                $stmt->bind_param($bindStr,...$bindParams);
            }
            $stmt->execute();
            $queryresult = $stmt->get_result();
            //specific result structure for each stat
            $response = fillResponseFromQueryResults($queryresult);
        } else {
            //Query or Bind Error
        }       
    } else {
        //DB connection error
    }

    $dirpath = __DIR__."\..\..\Data\\";
    include($dirpath."DBClose.php");

    return $response;
}




?>