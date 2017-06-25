<?php
    /**
     * khai bao session
     */
    session_start();
    // session_destroy();
    
    /**
     * goi cac file cấu hình
     * - xử lý database
     * - các hàm xử lý
     *
     *
     * - ý nghĩa  ! dùng để gọi chung tới tất cả các file 
     */
    require_once __DIR__ . "/../../libraries/Database.php";
    require_once __DIR__ . "/../../libraries/Function.php";
    require_once __DIR__ . "/../../libraries/Validation.php";
    // require_once __DIR__ . "/../../libraries/Middleware.php";

    
     if( ! isset($_SESSION['admin_na_level']))
     {
         redirectStyle('adminlogin/');
     }
     _debug($_SESSION['admin_na_level']);
     $adminid = intval($_SESSION['admin_na_id']);

    /**
     *  khởi tạo DB
     */


    $db = new Database();
    // $level = $_SESSION['admin_na_level'];
    // $middeware = new Middeware($active ,$level ,$open );

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    
    define("ROOT", $_SERVER['DOCUMENT_ROOT'] ."/webbongda/public/upload/");


     /**
     *  lấy time hiện tại 
     */
    $updatetime = date('Y-m-d  H:i:s');
    // tháng 
    $month = date('m');
    // ngày
    $day = date('d');


    //
    $dates = date('Y-m-d');
    while (date('w', strtotime($dates)) != 1) {
        $tmp = strtotime('-1 day', strtotime($dates));
        $dates = date('Y-m-d', $tmp);
    }
 
    $week = date('W', strtotime($dates));
    


