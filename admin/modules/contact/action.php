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
        redirectAdmin('contact');
    }
    /**
     * lấy id cần  sửa 
     * kiểm tra xem có tồn tại trong csdl không 
     */
    
    $Editcontact = $db->fetchID('contact',$id);

    /**
     * nếu trống thì id không tồn tại
     */

    if ( empty($Editcontact))
    {
        $_SESSION['error'] = ' LỖI !  Không tồn tại ID trong cơ sở dữ liệu ! ! ! ';
        redirectAdmin('contact');
    }
  

  
    $action = $Editcontact['action'] == 1 ? 0 : 1;
    $update = $db->update("contact",array('action' => $action) ,array("id" => $id));


    if ($update > 0)
    {
        $_SESSION['success'] = ' Thành Công !  Xóa dữ liệu thành công ! ! ! ';
        redirectAdmin("contact");
    }
    else
    {
        $_SESSION['error'] = " Thất bại ! Xóa dữ liệu thất bại ";
        redirectAdmin("contact");
    }

 ?>