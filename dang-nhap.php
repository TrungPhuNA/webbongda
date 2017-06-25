<?php

require_once __DIR__ . "/autoload/autoload.php";


$error = [] ;

$data = [

    'email'     => postInput("email"),
    'password'  => postInput("password")

];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $rules = [
        'email'       => 'required',
        'password'    => 'required'
    ];

    $request = new Validation($_POST, $rules);





    $password = MD5($data['password']);
    $email    = $data['email'];

    if( !empty($chek) )
    {
        $flag = 0;
        $_SESSION['error'] = " Email Đã tồn tại ";
    }


    if ($request->get_all_errors() === FALSE)
    {

        foreach ($request->get_all_errors() as $key => $errors) {
            $error[$key] = $errors;
        }
    }
    else
    {
        $chek = $db->fetchOne("users"," email = '".$email."' and password = '".$password."' and action = 1 ");

        if($chek != NULL)
        {
            $_SESSION['user_login_name'] = $chek['name'];
            $_SESSION['user_login_id']   = $chek['id'];
            echo " <script>alert('  Đăng nhập thành công   !'); location.href='index.php';</script>";
        }
        else
        {
            $_SESSION['error'] = " Sai thông tin đăng nhập hoạc tài khoản chưa kích hoạt ";
        }

    }

}

?>

<?php   require_once __DIR__ . "/include/header.php";   ?>

<!-- Content -->
<section id="content">
    <div class="container">
        <div class="breadcrumbs column">
            <p><a href="<?php echo base_url() ?>"> Home  </a>   \   <a href="#" style="color: #ea4748"> Đăng nhập </a></p>
        </div>
        <!-- Main Content  m-r-no-->
        <div class="main-content">

            <div class="column-two-third single">

                <div class="contact-form" id="dangky">
                    <?php   require_once __DIR__ . "/partials/notification.php";   ?>
                    <form action="" method="post" id="contactForm" name="contactForm">

                        <div class="form">
                            <label>Email*</label>
                            <div class="input">
                                <span class="email"></span>
                                <input type="text" class="name" name="email" id="email" value="<?php echo $data['email'] ?>" required>
                            </div>
                        </div>


                        <div class="form">
                            <label>Password*</label>
                            <div class="input">
                                <span class="email"></span>
                                <input type="password" class="name" name="password" id="email" required>
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
