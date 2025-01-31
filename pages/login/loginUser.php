<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="./../../style.css" rel="stylesheet"  type="text/css">
    <script src="login.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="login-container">
        <!--------need to make it return to the page the user was on previously-------->
        <a href="./loginChoice.php"><button class="yellow-btn return btn">< return</button></a>
        <div class="popup">
            <p class="popup-header form-header">Log in :</p>
            <img src="./../../images/logo.png" alt="users" width="40%">
            <div class="form">
                <form action="./checkLogin.php" method="post" onsubmit="checkLogin()">
                    <label for="email">email</label>
                    <input class="login_email" type="email" name="email">
                    <label for="password">password</label>
                    <input class="login_password" type="password" name="password">
                    <button class="yellow-btn still-btn" type="submit">Login</button>
                    <a href="./../signup/signupChoice.php">> Je n'ai pas de compte <</a>
                </form>
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
        margin: 5% 30%;
        border-radius: 32px;
        font-family: "Montserrat", serif;
        font-weight: bold;
        height: 620px;
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

    .still-btn:hover{
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

    .form-header{
        text-align: left;
        padding: 10px;
        margin:0;
    }

    .form{
        padding: 20px;
        text-align: left;
        margin: 0 10px 0 0;
    }

    .form input{
        width : 100%;
        clear: both;
        border-radius: 16px;
        border: 1px solid black;
        padding: 10px;
        margin: 5px 0;
        font-size: 18px;
    }
</style>
</html>