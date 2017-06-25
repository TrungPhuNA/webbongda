<?php
    session_start();
    unset($_SESSION['user_login_name']);
    unset($_SESSION['user_login_id']);
    header("location: index.php");
?>


