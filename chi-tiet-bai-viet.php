<?php 

    require_once __DIR__ . "/autoload/autoload.php"; 
    $id = getInput('id');
   

    // Gán coockie ktra view  
    $check_view  = insertview("chitiet_",$id,10,"posts");
    if($check_view == true)
    {
        $sql = " UPDATE posts SET view = view + 1 WHERE id = $id ";
        $up = $db->updateview($sql);
    }


    $posts = $db->fetchID('posts',$id);
    $idcate = intval($posts['categoryid']);
    $sql = "SELECT * FROM posts WHERE categoryid = $idcate LIMIT 4";
    $postDe = $db->fetchsql($sql);
   

?>

        <?php   require_once __DIR__ . "/include/header.php";   ?>
     
        <!-- Content -->
        <section id="content">
            <div class="container">
                <div class="breadcrumbs column">
                    <p><a href="<?php echo base_url() ?>"> Home  </a>   \ <a href="#" >Chi tiết bài viết</a>\  <a href="#" style="color: #ea4748"> <?php echo $posts['slug'] ?>  </a></p>
                </div>
                <!-- Main Content  m-r-no-->
               <div class="main-content">
                    
                    <!-- Single -->
                    <div class="column-two-third single">
                        <div class="flexslider">
                            <ul class="slides">
                                <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;">
                                    <img src="img/flexslider/1.png" alt="MyPassion">
                                </li>
                                <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;">
                                    <img src="img/flexslider/3.png" alt="MyPassion">
                                </li>
                                <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; display: list-item;">
                                    <img src="img/flexslider/5.png" alt="MyPassion">
                                </li>
                            </ul>
                        <ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
                        
                       
                        <h6 class="title"><?php echo $posts['describes'] ?></h6>
                        <span class="meta"><?php echo $posts['created_at'] ?></span>
                        <p class="noidung">
                            <?php echo $posts['content'] ?>
                        </p>
                        <ul class="sharebox">
                            <h4>Link share </h4>
                            <!-- <div class="fb-like" data-href="http://localhost/webbongda/chi-tiet-bai-viet.php?id=2" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div> -->
                        </ul>
                        
                        
                        <div class="authorbox">
                            <img src="img/trash/author.png" alt="MyPassion">
                            <h6>Tác giả .</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales dapibus dui, sed iaculis metus facilisis sed. Etiam scelerisque molestie purus vel mollis. Mauris dapibu quam id turpis dignissim rutrum.</p>
                        </div>
                        
                        <div class="relatednews">
                            <h5 class="line"><span> Bài viết liên quan</span></h5>
                            <ul>
                            <?php foreach($postDe as $item ) :?>
                                 <li>
                                    <a href="chi-tiet-bai-viet.php?id=<?php echo $item['id'] ?>"><img src="<?php echo uploads() ?>posts/<?php echo $item['thunbar'] ?>" alt="MyPassion" class="alignleft" width="140px" height="86px" /></a>
                                        <p>
                                            <span> Thời gian : <?php echo formathtime($item['created_at']) ?> </span>
                                            <a href="chi-tiet-bai-viet.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
                                        </p>
                                        <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                            <?php endforeach ;?>
                               
                                
                            </ul>
                        </div>
                        
                        <div class="comments">
                            <h5 class="line"><span>Comments.</span></h5>
                          <!--  <div class="fb-comments" data-href="http://localhost/webbongda/chi-tiet-bai-viet.php?id=1" data-numposts="5"></div> -->
                        </div>
                        
                       
                        
                    </div>
                    <!-- /Single -->
                    
                </div>
                <!-- /Main Content -->
                
                <!-- Left Sidebar -->
                <?php   require_once __DIR__ . "/include/right.php";   ?>
                <!-- /Left Sidebar -->
                
            </div>    
        </section>
        <!-- / Content -->
    <?php   require_once __DIR__ . "/include/footer.php";   ?>
