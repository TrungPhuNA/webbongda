<?php
    
    $open = "post";
    include __DIR__ ."/../../autoload/autoload.php";

    /**
     *  lấy id url
     */
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

    /**
     * nếu trống thì id không tồn tại
     */

    if ( empty($Editposts))
    {
        $_SESSION['error'] = ' LỖI !  Không tồn tại ID trong cơ sở dữ liệu ! ! ! ';
        redirectAdmin('posts');
    }


    

    $num = $db->delete('posts', $id);

    if ($num > 0)
    {
        $_SESSION['success'] = ' Thành Công !  Xóa dữ liệu thành công ! ! ! ';
        redirectAdmin("posts");
    }
    else
    {
        $_SESSION['error'] = " Thất bại ! Xóa dữ liệu thất bại ";
        redirectAdmin("posts");
    }

 ?>