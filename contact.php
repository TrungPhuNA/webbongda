<?php 

    require_once __DIR__ . "/autoload/autoload.php"; 


    $error = [] ; 

    $data = [
        'name'      => postInput("name"),
        'email'      => postInput("email"),
        'content'   => postInput("content")
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST")
        {

            $rules = [
                'name'    => 'required',
                'email'   => 'required',
                'content' => 'required'
            ];

            $request = new Validation($_POST, $rules);

            if ($request->checkerror() === FALSE)
            {
               foreach ($request->get_all_errors() as $errors) {
                   $error[] = $errors;
                }
            }
            else
            {
                
                $id_insert = $db->insert("contact",$data);
                if($id_insert)
                {
                    echo " <script>alert('  Gủi thông tin thành công ! bạn hãy chờ bộ phân support liên hệ lại  !'); location.href='index.php';</script>";
                }
                else
                {
                    $_SESSION['error'] = ' Thất bại ! Thêm mới dữ liệu thất bại   ! ! ! ';
                }
            }

        }

?>

        <?php   require_once __DIR__ . "/include/header.php";   ?>
     
        <!-- Content -->
        <section id="content">
            <div class="container">
                <div class="breadcrumbs column">
                    <p><a href="<?php echo base_url() ?>"> Home  </a>   \   <a href="#" style="color: #ea4748"> Contact</a></p>
                </div>
                <!-- Main Content  m-r-no-->
                <div class="main-content">
                    
                    <div class="column-two-third single">
                        
                        <div class="outerwide">
                            <h5 class="line"><span>Thông tin .</span></h5>
                            <p> Đồ án tốt nghiệp : SV : Đỗ Gia Tùng  : Lớp Tin Trắc Địa K57 </p>
                            <div class="contact-info">
                                <p class="man"><i class="icon-location"></i> Vĩnh Phúc <br> .. . . . .  <br>USA 10000.</p>
                                <p class="phone"><i class="icon-phone"></i> Phone:  0123456789. <br>Fax:  098654321.</p>
                                <p class="envelop"><i class="icon-mail"></i>Email: <a href="#">dogiatungit@page.com</a> <br> Web: <a href="#">www.page.com</a></p>
                            </div>
                        </div>
                        <div class="contact-form">
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
                                    <label>Message*</label>
                                    <textarea name="content" rows="10" cols="20"><?php echo $data['content'] ?></textarea>
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

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }
</script>