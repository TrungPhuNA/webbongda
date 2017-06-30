<?php
    
     $open = "category";
    include __DIR__ ."/../../autoload/autoload.php";

    /**
     *  lấy id url
     */
    $id = intval(getInput('id'));
    if(empty($id))
    {
        $_SESSION['error'] = ' LỖI !  Dữ liệu gủi lên không đúng định dạng  ! ! ! ';
        redirectAdmin('category');
    }
    /**
     * lấy id cần  sửa 
     * kiểm tra xem có tồn tại trong csdl không 
     */
    
    $EditCategory = $db->fetchID('category',$id);

    /**
     * nếu trống thì id không tồn tại
     */

    if ( empty($EditCategory))
    {
        $_SESSION['error'] = ' LỖI !  Không tồn tại ID trong cơ sở dữ liệu ! ! ! ';
        redirectAdmin('category');
    }


    

    $num = $db->delete('category', $id);

    if ($num > 0)
    {
        $_SESSION['success'] = ' Thành Công !  Xóa dữ liệu thành công ! ! ! ';
        redirectAdmin("category");
    }
    else
    {
        $_SESSION['error'] = " Thất bại ! Xóa dữ liệu thất bại ";
        redirectAdmin("category");
    }

 ?>