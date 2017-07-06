<?php 
    class Middeware
    {

        public $level_admin ;
        public $open = '' ;
        public function __construct($level_admin,$open)
        {
            /**
             * kiểm tra quyền
             */
            $level_admin = intval($level_admin);

            switch ($level_admin) {
                case 1:
                    if($open != "posts")
                    {
                        // redirectStyle();
                        // break;
                    }
                
                    break;
               default:
                   # subperadmin
                   # Quyền cao nhất làm tất cả mọi thứ 
                   break;
           }
        }
    }
 ?>