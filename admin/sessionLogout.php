
<?php
    session_start();
    unset($_SESSION["grade"]);
    header("Refresh:0; url=./../index.php");
?>