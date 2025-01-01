<?php

$pageurls = [
    "loginChoice" => "/pages/login/loginChoice.php",
    "loginAdmin" => "/pages/login/loginAdmin.php",
    "loginUser" => "/pages/login/loginUser.php",
    "signupChoice" => "/pages/signup/signupChoice.php",
    "signupAdmin" => "/pages/signup/signupAdmin.php",
    "signupUser" => "/pages/signup/signupUser.php",
    "annuaire" => "/pages/annuaire/annuaire.php",
    "news" => "/pages/news/news.php",
    "questionnaire" => "/pages/questionnaire/questionnaire.php",
    "statistics" => "/pages/stats/statistics.php"
];

$authorizedurls = [
    "admin" => ["annuaire", "news", "statistics"],
    "user" => ["annuaire", "news", "questionnaire"],
    "guest" => ["loginChoice", "loginAdmin", "loginUser", "signupChoice", "signupAdmin", "signupUser", "annuaire", "news"]
];