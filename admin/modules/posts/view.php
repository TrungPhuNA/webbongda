<?php

    /**
     * gọi file autoload
     */
    $open        = "posts";

    include __DIR__ ."/../../autoload/autoload.php";

   
      
    $id = intval(getInput('id'));
    if(empty($id))
    {
        $_SESSION['error'] = ' LỖI !  Dữ liệu gủi lên không đúng định dạng  ! ! ! ';
        redirectAdmin('posts');
    }
    /**
     * lấy id cần  sửa 
     * kiểm tra xem có tồn tại trong csdl không 
     */
    
    $Editposts = $db->fetchID('posts',$id);    

?>  

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $Editposts['name'] ?></h4>
            </div>
            <div class="modal-body">
                <?php echo $Editposts['content'] ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>