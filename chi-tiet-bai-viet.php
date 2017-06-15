<?php 

    require_once __DIR__ . "/autoload/autoload.php"; 
    $id = getInput('id');


    $posts = $db->fetchID('posts',$id);
    $idcate = intval($posts['category_id']);
    $sql = "SELECT * FROM posts WHERE category_id = $idcate LIMIT 4";
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
                            <li><a href="#"><span class="twitter">Tweet</span></a></li>
                            <li><a href="#"><span class="pinterest">Pin it</span></a></li>
                            <li><a href="#"><span class="facebook">Like</span></a></li>
                        </ul>
                        
                        
                        <div class="authorbox">
                            <img src="img/trash/author.png" alt="MyPassion">
                            <h6>MyPassion.</h6>
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
                            <ul>
                                <li>
                                    <div>
                                        <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion"></div>
                                        <div class="commment-text-wrap">
                                            <div class="comment-data">
                                                <p><a href="#" class="url">MyPassion</a> <br> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                            </div>
                                            <div class="comment-text">Curabitur nunc mauris, <a href="#">link test</a> id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                        </div>
                                        
                                    </div>
                                    <ul class="children">
                                        <li>
                                            <div>
                                                <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion"></div>
                                                <div class="commment-text-wrap">
                                                    <div class="comment-data">
                                                        <p><a href="#" class="url">MyPassion</a> <br> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                    </div>
                                                    <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                </div>
                                            </div>
                                            
                                            <ul class="children">
                                                <li>
                                                    <div>
                                                        <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion"></div>
                                                        <div class="commment-text-wrap">
                                                            <div class="comment-data">
                                                                <p><a href="#" class="url">MyPassion</a> <br> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                            </div>
                                                            <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <ul class="children">
                                                        <li>
                                                            <div>
                                                                <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion"></div>
                                                                <div class="commment-text-wrap">
                                                                    <div class="comment-data">
                                                                        <p><a href="#" class="url">MyPassion</a> <br> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                                    </div>
                                                                    <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                                </div>
                                                            </div>
                                                            
                                                            <ul class="children">
                                                                <li>
                                                                    <div>
                                                                        <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion"></div>
                                                                        <div class="commment-text-wrap">
                                                                            <div class="comment-data">
                                                                                <p>MyPassion <br> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                                            </div>
                                                                            <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <ul class="children">
                                                                        <li>
                                                                            <div>
                                                                                <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion"></div>
                                                                                <div class="commment-text-wrap">
                                                                                    <div class="comment-data">
                                                                                        <p><a href="#" class="url">MyPassion</a> <br> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                                                    </div>
                                                                                    <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    
                                                                </li>
                                                            </ul>
                                                            
                                                        </li>
                                                    </ul>
                                                    
                                                </li>
                                            </ul>
                                            
                                            <ul class="children">
                                                <li>
                                                    <div>
                                                        <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion"></div>
                                                        <div class="commment-text-wrap">
                                                            <div class="comment-data">
                                                                <p><a href="#" class="url">MyPassion </a><br> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                            </div>
                                                            <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            
                                        </li>
                                    </ul>
                                    <ul class="children">
                                        <li>
                                            <div>
                                                <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion"></div>
                                                <div class="commment-text-wrap">
                                                    <div class="comment-data">
                                                        <p><a href="#" class="url">MyPassion</a> <br> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                    </div>
                                                    <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="comment-form">
                            <h5 class="line"><span>Leave a reply.</span></h5>
                            <form action="#" method="post">
                                <div class="form">
                                    <label>Name*</label>
                                    <div class="input">
                                        <input type="text" class="name">
                                    </div>
                                </div>
                                <div class="form">
                                    <label>Email*</label>
                                    <div class="input">
                                        <input type="text" class="name">
                                    </div>
                                </div>
                                <div class="form">
                                    <label>Website</label>
                                    <div class="input">
                                        <input type="text" class="name">
                                    </div>
                                </div>
                                <div class="form">
                                    <label>Comment*</label>
                                    <textarea rows="10" cols="20"></textarea>
                                </div>
                                <input type="submit" class="post-comment" value="Post Comment">
                            </form>
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
