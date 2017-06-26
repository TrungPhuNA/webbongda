

<?php  
    session_start();
     require_once __DIR__ . "/../libraries/Function.php";
 ?>
<?php   require_once __DIR__ . "/../libraries/Database.php";  ?>


<?php 
    $db = new Database();
    if( isset($_SESSION['admin_na_level'])) 
    {
        redirectStyle('admin_na/');
    }


    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email    = postInput('email');
        $password = postInput('password');
        if( $email == "")
        {
            $error['email']  = ' Mời bạn điền email đăng nhập ';
        }

        if( $password == "")
        {
            $error['password']  = ' Mời bạn điền password đăng nhập ';
        }

        
        if( empty($error))
        {
            $login_admin = $db->fetchOne('admin',' email = "'.$email.'" AND password = "'.md5($password).'" AND active = 1 ');

            if ( ! empty($login_admin))      
            {

                $_SESSION['admin_na_name']  = $login_admin['name'];
                $_SESSION['admin_na_level'] = $login_admin['level'];
                $_SESSION['admin_na_id']    = $login_admin['id'];
                redirectHome();
            }
            else
            {
                $error['info']  = '  Sai thông tin đăng nhập  ';
            }
        }   
    }

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gentelella Alela! | </title>
        <!-- Bootstrap -->
        
        <link href="<?php echo base_url() ?>public/admin/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url() ?>public/admin/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo base_url() ?>public/admin/css/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <!-- Custom Theme Style -->
        <link href="<?php echo base_url() ?>public/admin/css/custom.min.css" rel="stylesheet">
    </head>
    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form action="" method="POST">
                            <h1>Login Form</h1>
                            <div>
                                <input type="email" name="email" class="form-control" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                               
                                <input type="submit" name="" class="btn btn-success" value="Đăng nhập ">
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">
                                
                                <div class="clearfix"></div>
                                <br />
                                <div>
                                    <h1><i class="fa fa-paw"></i>Đồ án tốt nghiệp</h1>
                                    <p>©2017 : Website bóng đá</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
               
            </div>
        </div>
    </body>
</html>