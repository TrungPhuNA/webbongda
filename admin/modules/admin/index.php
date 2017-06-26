
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

    $sql = " SELECT * FROM admin WHERE 1";

    $admin = $db->fetchJone('admin',$sql,$p, 5,true);
  
    if(isset($admin['page']))
    {
        $sotrang =  $admin['page'];
        unset($admin['page']); 
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
            <h2>Danh sách admin <a href="add.php" class="btn btn-success"> Thêm mới </a>   </h2>
            
            <div class="clearfix"></div>
        </div>
        <?php include __DIR__ ."/../../layouts/notification.php"; ?>
        <div class="x_content">
            
            <table class="table table-bordered" >
                <thead>
                    <tr>
                        <th> <input type="checkbox" name="" id="checkall" > All</th>
                        <th> id </th>
                        <th> Tên </th>
                        <th> Email </th>
                        <th> Phone </th>
                        <th class="text-center"> Trạng thái</th>
                        <th class="text-center"> Thao Tác </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($admin as $item) :?>
                    <tr>
                       <td><input type="checkbox" name="checkid[]" class="checkone" value="<?php echo $item['id'] ?>"></td>
                       <td><?php echo $item['id'] ?></td>
                       <td><?php echo $item['name'] ?></td>
                       <td><?php echo $item['email'] ?></td>
                       <td><?php echo $item['phone'] ?></td>
                       <td class="text-center">
                           <?php if($item['active'] == 1) :?>
                                <a href="action.php?id=<?php echo $item['id'] ?>" title="" class="btn btn-info btn-xs"><i class="fa fa-check"></i></a>
                           <?php else :?>
                                 <a href="action.php?id=<?php echo $item['id'] ?>" title="" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>
                           <?php endif ;?>
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
    

   