
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Đồ án tốt nghiệp : Đỗ Gia Tùng </title>
        <!-- Bootstrap -->
        <link href="<?php echo public_admin() ?>css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo public_admin() ?>css/font-awesome.min.css" rel="stylesheet">
         <script src="<?php echo public_admin() ?>ckeditor/ckeditor.js"></script>
        <!-- NProgress -->
        <link href="<?php echo public_admin() ?>css/nprogress.css" rel="stylesheet">
        <!-- jQuery custom content scroller -->
        <link href="<?php echo public_admin() ?>css/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
        <!-- Custom Theme Style -->
        <link href="<?php echo public_admin() ?>css/custom.min.css" rel="stylesheet">
         <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>public/tungngu.ico" type="image/x-icon"/>
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col menu_fixed">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?php echo base_admin() ?>" class="site_title"><i class="fa fa-paw"></i> <span>Đồ án </span></a>
                        </div>
                        <div class="clearfix"></div>
                        <!-- menu profile quick info -->
                       
                        <!-- /menu profile quick info -->
                        <br />
                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>Bảng điều khiển</h3>
                                <ul class="nav side-menu">
                                    <li class="active">
                                        <a href="<?php echo base_admin()?>"><i class="fa fa-home"></i> Trang chủ</a>
                                       
                                    </li>
                                   
                                    
                                    <li class="<?php echo  isset($open) && $open == 'category' ? 'active' : '' ?>">
                                        <a><i class="glyphicon glyphicon-list"></i> Quản lý danh mục <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo modules("category") ?>">Danh sách</a></li>
                                          
                                        </ul>
                                    </li>
                                  
                                    <li class="<?php echo  isset($open) && $open == 'post' ? 'active' : '' ?>">
                                        <a><i class="glyphicon glyphicon-pencil"></i> Quản lý bài viết<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo modules("posts") ?>">Danh sách</a></li>
                                            <li><a href="<?php echo modules("posts/xem.php") ?>"> Xem nhiều</a></li>
                                          
                                        </ul>
                                    </li>

                                    <li class="<?php echo  isset($open) && $open == 'contact' ? 'active' : '' ?>">
                                        <a><i class="fa fa-comments-o"></i> Quản lý Contact<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo modules("contact") ?>">Danh sách</a></li>
                                          
                                        </ul>
                                    </li>

                                    <li class="<?php echo  isset($open) && $open == 'video' ? 'active' : '' ?>">
                                        <a><i class="fa fa-file-video-o"></i> Quản lý video<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo modules("video") ?>">Danh sách</a></li>
                                          
                                        </ul>
                                    </li>

                                    <li class="<?php echo  isset($open) && $open == 'user' ? 'active' : '' ?>">
                                        <a><i class="fa fa-user"></i> Quản lý thành viên<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo modules("users") ?>">Danh sách</a></li>
                                          
                                        </ul>
                                    </li>

                                    <li class="<?php echo  isset($open) && $open == 'profile' ? 'active' : '' ?>">
                                        <a href="<?php echo modules("profile") ?>"><i class="fa fa-user"></i>  Trang cá nhân </a>
                                        
                                    </li>
                                    
                                    
                                    
                                </ul>
                            </div>
                            <div class="menu_section">
                                <h3>Cấu hình website</h3>
                                <ul class="nav side-menu">
                                    <li class="<?php echo  isset($open) && $open == 'admin' ? 'active' : '' ?>">
                                        <a><i class="glyphicon glyphicon-wrench"></i> Settings<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                         
                                            <li><a href="<?php echo modules("admin") ?>">Quản lý admin</a></li>
                                           
                                        </ul>
                                    </li>
                                   
                                
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->
                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>
                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                   <?php echo $_SESSION['admin_na_name'] ?>
                                    <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                      
                                        <li><a href="<?php echo base_url() ?>adminlogout/logout.php"><i class="fa fa-sign-out pull-right"></i> Đăng xuất </a></li>
                                    </ul>
                                </li>
                            
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->