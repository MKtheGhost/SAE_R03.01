<?php

$pageurls = [
    "loginChoice" => "login/loginChoice.php",
    "loginAdmin" => "login/loginAdmin.php",
    "loginUser" => "login/loginUser.php",
    "signupChoice" => "signup/signupChoice.php",
    "signupAdmin" => "signup/signupAdmin.php",
    "signupUser" => "signup/signupUser.php",
    "annuaire" => "annuaire/annuaire.php",
    "news" => "news/news.php",
    "questionnaire" => "questionnaire/questionnaire.php",
    "statistics" => "stats/statistics.php"
];

$authorizedurls = [
    "admin" => ["annuaire", "news", "statistics"],
    "user" => ["annuaire", "news", "questionnaire"],
    "guest" => ["loginChoice", "loginAdmin", "loginUser", "signupChoice", "signupAdmin", "signupUser", "annuaire", "news"]
];