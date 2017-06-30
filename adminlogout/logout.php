<?php

    session_start();
    require_once __DIR__ . "/../libraries/Function.php";

    
    unset($_SESSION['admin_na_name']);
    unset($_SESSION['admin_na_level']);
    unset($_SESSION['admin_na_id']);
    redirect("adminlogin");
?>  