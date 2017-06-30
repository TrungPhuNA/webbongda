
    <?php 
    include __DIR__ ."/autoload/autoload.php";
    ?>
    <?php 
        /**
         * goi file header
         */

        include __DIR__ ."/layouts/header.php";

        /*
        tông số bài viết
         */
        $totalPost = $db->countTable("posts");

        /**
         * tổng số lượt xem bài viết
         */
        
        $sqlview = "SELECT SUM(view) as view FROM posts ";
        $totalview = $db->fetchsql($sqlview);


        /**
         * tổng số thành viên
         */
        $totalUser  = $db->countTable("users");

        /**
         * tổng số contact
         */
        
        $contact = $db->countTable("contact");

        /**
         * tổng số video
         */
        
        $video = $db->countTable("video");

        /**
         * tổng số admin
         */
        
        $admin = $db->countTable("admin");
        
     ?>

    <!-- page content -->

    <div class="right_col" role="main" style="min-height: 200px !important">
        <div class="">
            <div class="page-title">
                
                <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-pencil-square"></i>  Tổng số bài viết </span>
                <div class="count"><?php echo $totalPost ?></div>
                <span class="count_bottom"><i class="green"><a href="<?php echo modules('posts') ?>" class="btn btn-info btn-xs">Xem</a></i></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Tổng số lượt xem bài viết</span>
              <div class="count"><?php echo $totalview[0]['view'] ?></div>
              
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i>  Tổng số thành viên </span>
                <div class="count green"><?php echo $totalUser ?></div>
                <span class="count_bottom"><i class="green"><a href="<?php echo modules('users') ?>" class="btn btn-info btn-xs">Xem</a></i></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-comment"></i> Tổng số contact </span>
                <div class="count"><?php echo $contact ?></div>
                <span class="count_bottom"><i class="green"><a href="<?php echo modules('contact') ?>" class="btn btn-info btn-xs">Xem</a></i></span>

            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-video-camera"></i> Tổng số video </span>
                <div class="count"><?php  echo $video ?></div>
                <span class="count_bottom"><i class="green"><a href="<?php echo modules('video') ?>" class="btn btn-info btn-xs">Xem</a></i></span>

            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Tổng số admin</span>
                <div class="count"><?php echo $admin ?></div>

            </div>
          </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

    <?php 
    /**
     * goi file footer
     */
         include __DIR__ ."/layouts/footer.php";
    ?>
    

   