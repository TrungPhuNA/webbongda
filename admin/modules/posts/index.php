
    <?php 
    $open = "post";
    include __DIR__ ."/../../autoload/autoload.php";

        if(isset($_GET['page']))
        {
            $p = $_GET['page'];
        }
        else
        {
            $p = 1;
        }
        $sql = "SELECT * FROM posts 
            LEFT JOIN category on category.id = posts.categoryid
         ";
        $posts = $db->fetchJone('posts',$sql,$p,10,true);
  
        if(isset($posts['page']))
        {
            $sotrang =  $posts['page'];
            unset($posts['page']); 
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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Danh mục</th>
                        <th>Slug</th>
                        <th>Hình ảnh</th>
                        <th>Trạng Thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($posts as $item) :?>
                        <tr>
                           
                            <td><?php echo $item['id'] ?></td>
                            <td><?php echo $item['name'] ?></td>
                            <td><?php echo $item['slug'] ?></td>
                            <td>
                                <img src="<?php echo uploads() ?>posts/<?php echo $item['thunbar'] ?>" width="60px" height="60px" alt="">
                            </td>
                            <td>
                                <?php if($item['active'] ==  1) :?>
                                <a href="#" class="btn  btn-info btn-xs"> Hiển thị</a>
                            <?php  else :?>
                                <a href="#" class="btn  btn-danger btn-xs">Ẩn</a>
                            <?php  endif ;?>
                            </td>
                            <td class="text-center">
                                <a href="edit.php?id=<?php echo $item['id'] ?>" class="btn  btn-info btn-xs"><i class="fa fa-edit"></i> Sửa</a>
                                
                                <a href="delete.php?id=<?php echo $item['id'] ?>" class="btn  btn-danger btn-xs confirmation"> <i class="fa fa-times"></i> Xóa</a>
                               <a type="button" class="btn btn-info btn-xs viewpost" data-id="<?php echo $item['id'] ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    <?php  endforeach ;?>
                </tbody>
            </table>
            <div class="modal fade viewmd" id="myModal" role="dialog">
                
            </div>
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
    

   