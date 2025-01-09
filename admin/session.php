<?php
if(session_status() != PHP_SESSION_ACTIVE ){
    session_start();
} else {
    session_destroy();
    session_start();
}
?>