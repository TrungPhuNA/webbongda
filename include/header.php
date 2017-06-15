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
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/fontello.css" />
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

<!-- Body Wrapper -->
<div class="body-wrapper">
    <div class="controller">
    <div class="controller2">

        <!-- Header -->
        <header id="header">
            <div class="container">
                <div class="column">
                    <div class="logo">
                        <a href="index-2.html"><img src="img/logo.png" alt="MyPassion" /></a>
                    </div>
                    
                    <div class="search">
                        <form action="#" method="post">
                            <input type="text" value="Search." onblur="if(this.value=='') this.value='Search.';" onfocus="if(this.value=='Search.') this.value='';" class="ft"/>
                            <input type="submit" value="" class="fs">
                        </form>
                    </div>
                    
                    <!-- Nav -->
                    <nav id="nav">
                        <?php echo showcatemenu($categorySort); ?>

                        <!-- <ul class="sf-menu">
                            <li class=""><a href="index-2.html">Home.</a></li>
                            <li>
                                <a href="#">Pages.</a>
                                <ul>
                                    <li><i class="icon-right-open"></i><a href="leftsidebar.html">Left Sidebar.</a></li>
                                    <li><i class="icon-right-open"></i><a href="reviews.html">Reviews.</a></li>
                                    <li><i class="icon-right-open"></i><a href="single.html">Single News.</a></li>
                                    <li><i class="icon-right-open"></i><a href="features.html">Features.</a></li>
                                    <li><i class="icon-right-open"></i><a href="contact.html">Contact.</a></li>
                                </ul>
                            </li>
                            <li><a href="reviews.html">World.</a></li>
                            <li><a href="reviews.html">Business.</a></li>
                            <li><a href="reviews.html">Politics.</a></li>
                            <li>
                                <a href="reviews.html">Sports.</a>
                                <ul>
                                    <li><i class="icon-right-open"></i><a href="#">Football.</a></li>
                                    <li><i class="icon-right-open"></i><a href="#">Running.</a></li>
                                    <li><i class="icon-right-open"></i><a href="#">Tennis.</a></li>
                                    <li><i class="icon-right-open"></i><a href="#">Fitness.</a></li>
                                    <li><i class="icon-right-open"></i><a href="#">Golf.</a></li>
                                    <li><i class="icon-right-open"></i><a href="#">Motosport.</a></li>
                                </ul>
                            </li>
                            <li><a href="reviews.html">Health.</a></li>
                            <li><a href="reviews.html">Science.</a></li>
                            <li><a href="reviews.html">Music.</a></li>
                            <li><a href="reviews.html">Tech.</a></li>
                        </ul> -->
                        
                    </nav>
                    <!-- /Nav -->
                </div>
            </div>
        </header>
        <!-- /Header -->