<?php

// to-do :
// - make links dynamically linked to the pages so it can be used in all repo
// - make some pages appear dynamically according to the user's grade

$loginMenu = ["loginChoice", "loginAdmin", "loginUser", "signupChoice", "signupAdmin", "signupUser"];

//PERMISSIONS
if (!isset($_SESSION["grade"])) {
  $pages = $authorizedurls["guest"];
}
 elseif ($_SESSION["grade"] == "admin") {
  $pages = $authorizedurls["admin"];
}
 elseif ($_SESSION["grade"] == "user") {
  $pages = $authorizedurls["user"];
}

//get the name of the current directory
$path = dirname(__FILE__);
$pieces = explode("\\", $path);
$directoryName = $pieces[count($pieces) - 1];

//set the navigation path according to the current directory ( 2 cases only here)
if (!isset($_SESSION["previousPage"])) {
  $navigationPath = "./pages/";
  $adminpath = "./admin/";
  $rootdirectoryPath = "./";
} else{
  $navigationPath = "./";
  $adminpath = "./../../admin/";
  $rootdirectoryPath = "./../../";
}

//define the url for each pages 
$urls = [];
for ($i = 0; $i < count($pages); $i++) {
  $urls[$pages[$i]] = $navigationPath.$pageurls[$pages[$i]];
}

//printing out the first part of the navbar
echo <<< HTML

      <div id="navbar">
        <ul>
          <a href="{$rootdirectoryPath}index.php"><img id="logo-elipse" src="{$rootdirectoryPath}images/logoElipse.png" alt="logo"></a>
          <div id="guest-menu">
HTML;

//for guestmenu, print links if not a login link
foreach ($urls as $key => $url) {
  if (!in_array( $key, $loginMenu)) {
    echo '<li><a class="navlink" href="'.$url.'">'.$key.'</a></li>';
  }
}

// print container for login menu
echo <<< HTML
          </div>
          <div id="login-menu">
HTML;

// print login links if grade is guest, else print user logo
if (in_array("loginChoice", $pages)) {
  echo ' <li><a class="navlink" href="'.$urls["loginChoice"].'"><button class="green-btn still-btn index-btn">se connecter</button></a></li>
            <li><a class="navlink" href="'.$urls["signupChoice"].'"><button class="yellow-btn still-btn index-btn">s\'inscrire</button></a></li>';
} else {
  echo '<form action="'.$adminpath.'sessionLogout.php">';
  echo '<button class="yellow-btn still-btn" style="margin: 5px 70px 0 165px">Log out</button>';
  echo '</form>';

}

echo <<< HTML
          </div>
        </ul>
      </div>

      <style>
        a{
          text-decoration : none;
          font-family: "Montserrat", serif;
          font-weight: bold;
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
          margin-left : 100px;
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

unset($_SESSION["previousPage"]);