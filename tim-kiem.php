<?php 

    require_once __DIR__ . "/autoload/autoload.php"; 
    $key = getInput('keywork');


    if(isset($_GET['page']))
    {
        $p = $_GET['page'];
    }
    else
    {
        $p = 1;
    }


    $sql = "SELECT * FROM posts WHERE name LIKE '%$key%' ";
    $coutnts = count($db->fetchsql($sql));
    $posts = $db->fetchJones('posts',$sql,$coutnts,$p, 5,true);
    if(isset($posts['page']))
    {
        $sotrang =  $posts['page'];
        unset($posts['page']); 
    }

    $path = $_SERVER['SCRIPT_NAME'];

    // _debug($posts);
?>

        <?php   require_once __DIR__ . "/include/header.php";   ?>
     
        <!-- Content -->
        <section id="content">
            <div class="container">
                <div class="breadcrumbs column">
                    <p><a href="<?php echo base_url() ?>"> Home  </a>   \   <a href="#" style="color: #ea4748"> Tìm kiếm   </a></p>
                </div>
                <!-- Main Content  m-r-no-->
                <div class="main-content">
                    
                    <!-- Popular News -->
                    <?php if (count($posts) > 0): ?>
                        <div class="column-two-third">
                       
                            <div class="outerwide">
                                <ul class="block2">
                                    <?php $i = 1; foreach($posts as $item) :?>
                                        <li class="<?php echo $i % 2 != 0 ? 'm-r-no' : '' ?>">
                                            
                                            <a href="chi-tiet-bai-viet.php?id=<?php echo $item['id'] ?>"><img src="<?php echo uploads() ?>posts/<?php echo $item['thunbar'] ?>" alt="MyPassion" class="alignleft" width="140px" height="86px" /></a>
                                            <p>
                                                <span> Thời gian : <?php echo formathtime($item['created_at']) ?> </span>
                                                <a href="chi-tiet-bai-viet.php?id=<?php echo $item['id'] ?>"><?php echo cutstring($item['name'],50) ?></a>
                                            </p>
                                            <p><i class="fa fa-eye"> <b> <?php echo $item['view'] ?></b></i></p>
                                            <span class="rating"><span style="width:80%;"></span></span>
                                        
                                        </li>
                                    <?php $i++ ;endforeach ;?>
                                  
                                </ul>
                            </div>
                            
                            <div class="pager">
                                
                                 <ul class="pager" >
                                    <li>
                                        <a href="" class="first-page">
                                          
                                        </a>
                                    </li>

                                    <?php for(  $i = 1 ; $i <= $sotrang ; $i++ ) : ?>
                                        <?php
                                        if(isset($_GET['page']))
                                        {
                                            $p = $_GET['page'];
                                        }
                                        else
                                        {
                                            $p = 1;
                                        }
                                        ?>
                                        <li class="<?php echo ($i == $p) ? 'active' : ''  ?>">
        
                                            <a href="<?php echo $path ?>?keywork=<?php echo $key ?>&&page=<?php echo $i ;?>"><?php echo $i; ?></a>
                                        </li>

                                    <?php endfor; ?>

                                    <li>
                                        <a href="" class="last-page"></a>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    <?php else : ?>
                        <p> Không có dữ liệu nào !!!</p>
                    <?php endif ?>
                    
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
