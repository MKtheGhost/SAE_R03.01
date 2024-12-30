<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="./../../style.css" rel="stylesheet"  type="text/css">
    <title>Signup Choice</title>
</head>
<body>
    <div class="login-container">
        <button class="yellow-btn return-btn"><a href="./../../index.php">< return</a></button>
        <div class="popup">
            <p class="popup-header">Vous êtes :</p>
                <div class="signup-choice">
                    <img src="./../../images/team.png" alt="users" width="100%">
                    <br><br>
                    <button class="green-btn user-btn"><a href="./signupUser.php">user</a></button>
                </div>
                <div class="signup-choice">
                    <img src="./../../images/administrator.png" alt="administrator" width="100%">
                    <button class="yellow-btn"><a href="./signupAdmin.php">admin</a></button>                
                </div>
        </div>
    </div>
</body>

<style>

        body{
            margin: 0;
            padding: 0;
        }

        a{
            text-decoration: none;
            color: black;
        }

        .login-container{
            background-color: #436957;
            align-items: center;
            min-height: 100vh;
            min-width: 100vw;
            justify-content: center;
            align-items: center;
        }

        .popup{
           
            text-align: center;
            background-color: white;
            padding: 20px 20px;
            margin: 10% 35%;
            border-radius: 32px;
            font-family: "Montserrat", serif;
            font-weight: bold;
            height: 350px;
        }

        .yellow-btn {
            padding: 10px 20px;
            background-color: #EED391;
            border-radius: 30px;
            text-align: center;
            border: 0px solid black;
            font-family: "Montserrat", serif;
            font-weight: bold;
            margin: 10px;
            transition: 0.2s ease;
        }

        .yellow-btn:hover {
            color: white;
            transition: 0.2s ease;
            padding: 12px 24px;
        }

        .green-btn:hover {
            color: white;
            transition: 0.2s ease;
            padding: 12px 24px;
        }

        .green-btn{
            background-color: #436957;
            padding: 10px 20px;
            border-radius: 30px;
            text-align: center;
            border: 0px solid black;
            font-family: "Montserrat", serif;
            font-weight: bold;
            margin: 10px;
            transition: 0.2s ease;
        }

        .return-btn{
            margin: 20px;
            color: black;
            transition: 0s ease;
        }

        .return-btn:hover{
            transition: 0.2s ease;
            padding: 10px 20px;
        }

        .signup-choice{
            display: table-cell;
            vertical-align: middle;
            padding: 20px;
        }

        .user-btn{
            margin-top: 20px;
        }

        .popup-header{
            font-size: 24px;
        }
    </style>
</html>