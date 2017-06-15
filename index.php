<?php 

    require_once __DIR__ . "/autoload/autoload.php"; 

    // lấy ra bài viết có danh mục nổi bật
    $sqlCateHome = "SELECT home,name FROM category WHERE home = 1";
    $CateHome = $db->fetchsql($sqlCateHome);

    foreach($CateHome as $item)
    {
        $cateid = intval($item);
        $sql = " SELECT * FROM posts WHERE category_id = $cateid ORDER BY ID DESC LIMIT 2";
        $data[$item['name']] = $db->fetchsql($sql);
    }
    
    // end
    

    // lấy bài viets mới nhất
    $sqlnew = "SELECT * FROM posts ORDER BY ID DESC LIMIT 3";
    $postnew = $db->fetchsql($sqlnew);

    //end
    //
    //// bài viết nổi bật
    $sqlhead = "SELECT * FROM posts WHERE hot = 1 ORDER BY updated_at DESC LIMIT 3";
    $posthead = $db->fetchsql($sqlhead);
    //end
    // _debug($posthead);


   
?>

        <?php   require_once __DIR__ . "/include/header.php";   ?>
       
         <link href="<?php echo base_url() ?>public/frontend/css/w3.css" rel="stylesheet">
        <!-- Slider -->
        <section id="slider">
            <div class="w3-content w3-display-container">
                <img class="mySlides" src="<?php echo base_url() ?>public/frontend/images/slide.jpg" style="width:100%">
                <img class="mySlides" src="<?php echo base_url() ?>public/frontend/images/slide2.jpg" style="width:100%">
              <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
              <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
            </div>    
        </section>
        <!-- / Slider -->
        
        <!-- Content -->
        <section id="content">
            <div class="container">
                <!-- Main Content  m-r-no-->
                <div class="main-content">
                    <?php foreach($data as $key => $val) :?>
                        <div class="column-one-third">
                        <h5 class="line"><span><?php echo $key ?></span></h5>
                        <div class="outertight">
                            <ul class="block">
                                <?php foreach($val as $item) :?>
                                    <li>
                                        <a href="#"><img src="<?php echo uploads() ?>posts/<?php echo $item['thunbar'] ?>" alt="MyPassion" class="alignleft" width="140px" height="86px" /></a>
                                        <p>
                                            <span> Thời gian : <?php echo formathtime($item['created_at']) ?> </span>
                                            <a href="#"><?php echo $item['name'] ?></a>
                                        </p>
                                        <span class="rating"><span style="width:80%;"></span></span>
                                    </li>
                                <?php endforeach ;?>                               
                            </ul>
                        </div>
                        
                    </div>
                    <?php endforeach ;?>
                    
                    
                    <!-- Life Style -->
                    <div class="column-two-third">
                        <h5 class="line">
                            <span>Bài viết mới nhất</span>
                            <div class="navbar">
                                <a id="next1" class="next" href="#"><span></span></a>   
                                <a id="prev1" class="prev" href="#"><span></span></a>
                            </div>
                        </h5>
                        
                        <div class="outertight">
                            <img src="<?php echo uploads() ?>posts/<?php echo $postnew[0]['thunbar'] ?>" alt="MyPassion" />
                            <h6 class="regular"><a href="#"><?php echo $postnew[0]['name'] ?></a></h6>
                          
                            <p><?php echo cutstring($postnew[0]['describes'],500) ?></p>
                        </div>
                        
                        <div class="outertight m-r-no">
                            
                            <ul class="block" id="carousel">
                                <?php foreach($postnew as $item) :?>
                                    <li>
                                        <a href="#"><img src="<?php echo uploads() ?>posts/<?php echo $item['thunbar'] ?>" alt="MyPassion" class="alignleft" width="140px" height="80px" /></a>
                                        <p>
                                            <span>Thời gian : <?php echo formathtime($item['created_at']) ?> </span>
                                            <a href="#"><?php echo $item['name'] ?></a>
                                        </p>
                                        <span class="rating"><span style="width:80%;"></span></span>
                                    </li>
                                <?php endforeach ;?>
                                
                              
                            </ul>
                        </div>
                    </div>
                    <!-- /Life Style -->
                    
                    <!-- World News -->
                    <div class="column-two-third">
                        <h5 class="line">
                            <span> Bài viết nổi bật</span>
                            <div class="navbar">
                                <a id="next2" class="next" href="#"><span></span></a>   
                                <a id="prev2" class="prev" href="#"><span></span></a>
                            </div>
                        </h5>
                        
                        <div class="outerwide" >
                            <ul class="wnews" id="carousel2">
                                <?php foreach($posthead as $item) :?>
                                    <li>
                                        <img src="<?php echo uploads() ?>posts/<?php echo $item['thunbar'] ?>" alt="MyPassion" class="alignleft" width="300px" height="162px" />
                                        <h6 class="regular"><a href="#"><?php echo $item['name'] ?></a></h6>
                                        <span class="meta">Thời gian : <?php echo formathtime($item['created_at']) ?> </span>
                                        <p><?php echo cutstring($postnew[0]['describes'],500) ?></p>
                                    </li>
                                <?php endforeach ;?>
                               
                            </ul>
                        </div>
                        
                    
                    </div>
                    <!-- /World News -->
                    
                    
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

