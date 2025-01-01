<?php

function initSession ($userGrade) {

    if (checkGradeInput($userGrade)) {
        session_start();
        $_SESSION["grade"] = $userGrade;
    } else {
        echo "session not initialized";
    }

    //init userid later in the session
}

function checkGradeInput($grade) {
    if (in_array($grade, ["admin", "guest", "user"])) {
        return true;
    } else {
        return false;
    }
}