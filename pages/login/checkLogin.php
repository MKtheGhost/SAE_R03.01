<?php
    session_start();

    //get the user credentials

    $_SESSION["grade"] = "";
    $_SESSION["userid"] = "";
    header("Location: ./../../index.php");
?>