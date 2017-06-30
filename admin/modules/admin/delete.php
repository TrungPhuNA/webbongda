<?php
    
    $open = "admin";
    
    /**
     * gọi file autoload
     */
    
    include __DIR__ ."/../../autoload/autoload.php";

    /**
     *  lấy id url
     */
    $id = intval(getInput('id'));
    if(empty($id))
    {
        $_SESSION['error'] = ' LỖI !  Dữ liệu gủi lên không đúng định dạng  ! ! ! ';
        redirectAdmin('admin');
    }
    /**
     * lấy id cần  sửa 
     * kiểm tra xem có tồn tại trong csdl không 
     */
    
    $Editadmin = $db->fetchID('admin',$id);

    /**
     * nếu trống thì id không tồn tại
     */

    if ( empty($Editadmin))
    {
        $_SESSION['error'] = ' LỖI !  Không tồn tại ID trong cơ sở dữ liệu ! ! ! ';
        redirectAdmin('admin');
    }
    // _debug($level_admin);die;

    if($Editadmin['level'] >= $adminlevel)
    {
        $_SESSION['error'] = ' LỖI !  Bạn không có thẩm quyền  ! ! ! ';
        redirectAdmin('admin');
    }
    $num = $db->delete('admin', $id);

    if ($num > 0)
    {
        $_SESSION['success'] = ' Thành Công !  Xóa dữ liệu thành công ! ! ! ';
        redirectAdmin("admin");
    }
    else
    {
        $_SESSION['error'] = " Thất bại ! Xóa dữ liệu thất bại ";
        redirectAdmin("admin");
    }

 ?>