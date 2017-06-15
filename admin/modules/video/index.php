
    <?php 
    include __DIR__ ."/../../autoload/autoload.php";
    


    if(isset($_GET['page']))
    {
        $p = $_GET['page'];
    }
    else
    {
        $p = 1;
    }

    $sql = " SELECT * FROM video WHERE 1";

    $video = $db->fetchJone('video',$sql,$p, 5,true);
  
    if(isset($video['page']))
    {
        $sotrang =  $video['page'];
        unset($video['page']); 
    }
    

    ?>
    <?php 
        /**
         * goi file header
         */

        include __DIR__ ."/../../layouts/header.php";
     ?>

    <!-- page content -->

    <div class="right_col" role="main">
       <div class="x_panel">
             <div class="x_title">
            <h2>Danh muc  <a href="add.php" class="btn btn-success">Thêm mới </a></h2>
            
            <div class="clearfix"></div>
        </div>
        <?php include __DIR__ ."/../../layouts/notification.php"; ?>
        <div class="x_content">
            
            <table class="table table-bordered" >
                <thead>
                    <tr>
                        <th> <input type="checkbox" name="" id="checkall" > All</th>
                        <th> id </th>
                        <th> Tiêu đề </th>
                        
                        <th class="text-center"> Thao Tác </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($video as $item) :?>
                    <tr>
                       <td><input type="checkbox" name="checkid[]" class="checkone" value="<?php echo $item['id'] ?>"></td>
                       <td><?php echo $item['id'] ?></td>
                       <td>
                           <a href="#" data-toggle="tooltip" title='<?php echo $item['url'] ?>'><?php echo $item['name'] ?></a>
                        </td>
                       <td class="text-center">
                            <a href="edit.php?id=<?php echo $item['id'] ?>" class="btn default btn-xs green"><i class="fa fa-edit"></i> Sửa</a>
                            
                            <a href="delete.php?id=<?php echo $item['id'] ?>" class="btn default btn-xs red confirmation" > <i class="fa fa-times"></i> Xóa</a>
                           
                        </td>
                    </tr>
                    <?php endforeach ; ?>
                </tbody>
            </table>
            <nav aria-label="Page navigation" class="clearfix">

                            <ul class="pagination" >
                                <li>
                                    <a href=""  aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
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

                                        <a href="?page=<?php echo $i ;?>"><?php echo $i; ?></a>
                                    </li>
                                <?php endfor; ?>

                                <li>
                                    <a href="" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
        </div>
        </div>
    <!-- /page content -->

    <?php 
    /**
     * goi file footer
     */
         include __DIR__ ."/../../layouts/footer.php";
    ?>
    

   