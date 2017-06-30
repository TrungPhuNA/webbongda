<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="News - Clean HTML5 and CSS3 responsive template">
<meta name="author" content="MyPassion">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title> Đồ án tốt nghiệp : Đỗ Gia Tùng</title>

<link rel="shortcut icon" href="img/sms-4.ico" />

<!-- STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/css.css" media="screen"/>
<!-- <link rel="stylesheet" type="text/css" href="public/frontend/css/fontello.css" /> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/flexslider.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/font-awesome.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/ui.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/base.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/960.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/1000.css" media="only screen and (min-width: 768px) and (max-width: 1000px)" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/767.css" media="only screen and (min-width: 480px) and (max-width: 767px)" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/479.css" media="only screen and (min-width: 200px) and (max-width: 479px)" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/css.css" />
<!--[if lt IE 9]> <script type="text/javascript" src="js/customM.js"></script> <![endif]-->


</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=227864031057153";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Body Wrapper -->
<div class="body-wrapper">
    <div class="controller">
    <div class="controller2">

        <!-- Header -->
        <header id="header">
            <div class="container">
                <div class="column">
                    <div class="logo">
                        <a href="<?php echo base_url()?>"><img src="img/logo.png" alt="MyPassion" /></a>
                    </div>
                    
                    <div class="search">
                        <form action="tim-kiem.php" method="get">
                            <input type="text" placeholder="Từ khóa tìm kiếm " value="<?php echo  isset($key) ? $key : '' ?>"  class="ft" name="keywork" required="" />
                            <input type="submit" value="" class="fs">
                        </form>
                    </div>
                    
                    <!-- Nav -->
                    <nav id="nav">
                        <?php echo showcatemenu($categorySort); ?>

                        
                    </nav>
                    <!-- /Nav -->
                </div>
            </div>
        </header>
        <!-- /Header -->