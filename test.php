<?php 

    require_once __DIR__ . "/autoload/autoload.php"; 


    $count_file = "counter.txt";
    $ip_file = "ip.txt";
    function test()
    {
        global $ip_file ;
        $a = file($ip_file,FILE_IGNORE_NEW_LINES);
        print_r($a);
    }

    function counting()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        global $count_file, $ip_file;

        if(!in_array($ip,file($ip_file,FILE_IGNORE_NEW_LINES)))
        {
            $current_val = (file_exists($count_file)) ? file_get_contents($count_file) : 0;
            file_put_contents($ip_file,$ip."\n",FILE_APPEND);
            file_get_contents($count_file, ++ $current_val);
        }
    }
    counting();

?>

    <?php   require_once __DIR__ . "/include/header.php";   ?>
     
        <!-- Content -->
        <section id="content">
          
        </section>
        <!-- / Content -->
    <?php   require_once __DIR__ . "/include/footer.php";   ?>