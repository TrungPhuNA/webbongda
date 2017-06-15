
    <?php 
    include __DIR__ ."/../../autoload/autoload.php";
    $category = $db->fetchAll('category');
    recursive($category ,$parents = 0 ,$level = 1 ,$categorySort);

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
                                    <th> Tên </th>
                                    <th> Slug </th>
                                    <th> Home </th>
                                    <th class="text-center"> Thao Tác </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($categorySort as $item) :?>
                                <tr>
                                   <td><input type="checkbox" name="checkid[]" class="checkone" value="<?php echo $item['id'] ?>"></td>
                                   <td><?php echo $item['id'] ?></td>
                                   <td>
                                        <?php $str = ''; for($i = 0 ; $i < $item['level']; $i++){ echo $str; $str.="| - -";} ?> <?php echo $item['name'] ?>
                                   </td>
                                 
                                   <td> <?php echo $item['slug'] ?></td>
                                    <td>
                                        <?php if($item['home'] == 0) :?>
                                            <a href="home.php?id=<?php echo $item['id'] ?>" class="btn btn-xs btn-default">Không</a>
                                        <?php else : ?>
                                            <a href="home.php?id=<?php echo $item['id'] ?>" class="btn btn-xs btn-info">Có</a>
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
            
        </div>
        </div>
    <!-- /page content -->

    <?php 
    /**
     * goi file footer
     */
         include __DIR__ ."/../../layouts/footer.php";
    ?>
    

   