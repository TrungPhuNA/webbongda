<?php
    
  
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
        redirectAdmin('users');
    }
    /**
     * lấy id cần  sửa 
     * kiểm tra xem có tồn tại trong csdl không 
     */
    
    $Editusers = $db->fetchID('users',$id);

    /**
     * nếu trống thì id không tồn tại
     */

    if ( empty($Editusers))
    {
        $_SESSION['error'] = ' LỖI !  Không tồn tại ID trong cơ sở dữ liệu ! ! ! ';
        redirectAdmin('users');
    }
  

  
    $action = $Editusers['action'] == 1 ? 0 : 1;
    $update = $db->update("users",array('action' => $action) ,array("id" => $id));


    if ($update > 0)
    {
        $_SESSION['success'] = ' Thành Công !  Cập nhật thành công ! ! ! ';
        redirectAdmin("users");
    }
    else
    {
        $_SESSION['error'] = " Thất bại ! Cập nhật  thất bại ";
        redirectAdmin("users");
    }

 ?>