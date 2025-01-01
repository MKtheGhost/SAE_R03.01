<?php

// to-do :
// - make links dynamically linked to the pages so it can be used in all repo
// - make some pages appear dynamically according to the user's grade


echo <<< HTML

      <div id="navbar">
        <ul>
          <a href="./index.php"><img id="logo-elipse" src="./images/logoElipse.png" alt="logo"></a>
          <div id="guest-menu">
            <li><a class="navlink" href="./pages/annuaire/annuaire.php">annuaire</a></li>
            <li><a class="navlink" href="./pages/news/news.php"></a>actualités</li>
            <li><a class="navlink" href="./pages/stats/statistics.php"></a>stats</li>
          </div>
          <div id="login-menu">
            <li><a class="navlink" href="./pages/login/loginChoice.php"><button class="green-btn still-btn index-btn">se connecter</button></a></li>
            <li><a class="navlink" href="./pages/signup/signupChoice.php"><button class="yellow-btn still-btn index-btn">s'inscrire</button></a></li>
          </div>
        </ul>
      </div>

      <style>
        a{
          text-decoration : none;
        }

        .navlink{
          color : white;
        }

         .navlink:visited{
          color : white;
          text-decoration: none;
        }

        .navlink:hover{
          color : black;
        }

        #navbar{
          margin : auto;
          display : inline-block;
          padding: 0;
          display : flex;
          justify-content : center;
        }
        ul{
          list-style-type: none;
        }

        #guest-menu{
          margin : 20px 100px 20px 50px;
          background-color: #436957;
          overflow: hidden; 
          border-radius : 36px;
          width : 500px;
          float :left;
          display : flex;
          justify-content : center;
        }

        #login-menu{
          float : left;
          margin : 0 50px;
        }

        li{
          float: left;
          color: #f2f2f2;
          text-align: center;
          padding: 10px 20px;
          text-decoration: none;
          font-size: 14px;
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

        .index-btn{
          margin : 10px 0;
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

        #logo-elipse{
          margin : 10px 0 20px 30px;
          float : left;
          width : 55px;
        }
      </style>

HTML;