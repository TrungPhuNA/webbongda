<?php 

    require_once __DIR__ . "/autoload/autoload.php"; 


    $error = [] ; 

    $data = [
        'name'      => postInput("name"),
        'email'     => postInput("email"),
        'phone'     => postInput("phone"),
        'address'   => postInput("address"),
        'password' => postInput("password")
      
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $rules = [
            'name'         => 'required',
            'email'        => 'required|email',
            'phone'        => 'required',
            'address'      => 'required',
            'password'    => 'required',
            're_password' => 'required'
        ];

        $request = new Validation($_POST, $rules);

        $flag = 1;
        $password = postInput("password");
        $re_password = postInput("re_password");
      
        
        if($password  != $re_password || strlen($password) <= 6)
        {
            $flag = 0;
            $_SESSION['error'] = " Mật khẩu xác nhận không khớp hoạc quá ngắn  ";
        }
        else
        {
            $data['password'] = MD5($password);
        }

       
        $email  = $data['email'];
        $chek = $db->fetchOne("users"," email = '".$email."'");
        if( !empty($chek) )
        {
            $flag = 0;
            $_SESSION['error'] = " Email Đã tồn tại ";
        }
        

        if ($request->get_all_errors() === FALSE || $flag == 0)
        {
            foreach ($request->get_all_errors() as $key => $errors) {
                $error[$key] = $errors;
            }
        }
        else
        {
            $idinsert = $db->insert("users",$data);
            if($idinsert)
            {
                 echo " <script>alert('   Đăng ký thành công ! Khi nào admin kích hoạt thì user của bạn sẽ được hoạt động   !'); location.href='index.php';</script>";
            }
        }

    }

?>

        <?php   require_once __DIR__ . "/include/header.php";   ?>
     
        <!-- Content -->
        <section id="content">
            <div class="container">
                <div class="breadcrumbs column">
                    <p><a href="<?php echo base_url() ?>"> Home  </a>   \   <a href="#" style="color: #ea4748"> Đăng ký </a></p>
                </div>
                <!-- Main Content  m-r-no-->
                <div class="main-content">
                    
                    <div class="column-two-third single">
                       
                        <div class="contact-form" id="dangky">
                             <?php   require_once __DIR__ . "/partials/notification.php";   ?>
                            <form action="" method="post" id="contactForm" name="contactForm">
                                <div class="form">
                                    <label>Name*</label>
                                    <div class="input">
                                        <span class="name"></span>
                                        <input type="text" class="name" name="name" id="yourname" value="<?php echo $data['name'] ?>">
                                    </div>
                                </div>
                                <div class="form">
                                    <label>Email*</label>
                                    <div class="input">
                                        <span class="email"></span>
                                        <input type="text" class="name" name="email" id="email" value="<?php echo $data['email'] ?>">
                                    </div>
                                </div>

                                <div class="form">
                                    <label>Phone*</label>
                                    <div class="input">
                                        <span class="email"></span>
                                        <input type="number" class="name" name="phone" id="email" value="<?php echo $data['phone'] ?>">
                                    </div>
                                </div>

                               

                                <div class="form">
                                    <label>Password*</label>
                                    <div class="input">
                                        <span class="email"></span>
                                        <input type="password" class="name" name="password" id="email">
                                    </div>
                                </div>


                                <div class="form">
                                    <label>ConfigPassword*</label>
                                    <div class="input">
                                        <span class="email"></span>
                                        <input type="password" class="name" name="re_password" id="email">
                                    </div>
                                </div>

                                 <div class="form">
                                    <label>Address*</label>
                                    <div class="input">
                                        <span class="email"></span>
                                        <input type="text" class="name" name="address" id="email" value="<?php echo $data['address'] ?>">
                                    </div>
                                </div>
                             
                                <div class="form2">
                                    <!--<input type="submit" class="send-message" value="Send Message" />-->
                                   <input type="submit" name="" class="send" value="Gủi">
                                </div>
                            </form>
                            <div class="alertMessage"></div>
                        </div>
                    </div>
                    </div>
                    <!-- /Popular News -->
                    
                </div>
                <!-- /Main Content -->
                
                <!-- Left Sidebar -->
                <?php   require_once __DIR__ . "/include/right.php";   ?>
                <!-- /Left Sidebar -->
                
            </div>    
        </section>
        <!-- / Content -->
    <?php   require_once __DIR__ . "/include/footer.php";   ?>
