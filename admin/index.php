
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

     ?>

    <!-- page content -->

    <div class="right_col" role="main">
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
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
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
    

   