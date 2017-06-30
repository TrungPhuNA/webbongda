
    <?php 
        $open = "user";
        include __DIR__ ."/../../autoload/autoload.php";
         /**
         * lấy dữ liệu từ đệ quy
         *
         */
        
        $users =  $db->fetchAll("users");
        $error = [] ; 

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
       
        $error = [] ; 

        $data = [
            'name'      => postInput("name"),
            'email'       => postInput("email"),
            'phone'       => postInput("phone"),
            'address'       => postInput("address")
          
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {

            $rules = [
                'name' => 'required',
                'email'  => 'required',
                'phone'  => 'required',
                'address'  => 'required'
            ];

            $request = new Validation($_POST, $rules);
           
            if ($request->checkerror() === FALSE)
            {
               foreach ($request->get_all_errors() as $errors) {
                   $error[] = $errors;
                }
            }
            else
            {
                if($adminlevel == 2)
                {
                    $data['action'] = 1;
                }
                $id_update = $db->update("users",$data,array("id"=>$id));
                if($id_update)
                {
                    $_SESSION['success'] = 'Thành công ! Cập nhật dữ liệu thành công ! ! ! ';
                    redirectAdmin('users');
                }
                else
                {
                    $_SESSION['error'] = ' Thất bại ! Cập nhật dữ liệu thất bại   ! ! ! ';
                }
            }

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
        <div class="row">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Thêm mới thành viên  </h2>
                    <div class="clearfix"></div>

                </div>
                <!-- Hiện thông báo -->
                <!-- Hiện thông báo -->
                <?php include __DIR__ ."/../../layouts/notification.php"; ?>
                <div class="x_content">
                    <form class="form-horizontal" action="" method="POST">
                        
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label">Tên thành viên</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Mời bạn nhập tên danh mục" value="<?php echo $Editusers['name'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label"> Email </label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Mời bạn nhập email " value="<?php echo $Editusers['email'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label"> Phone  </label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="inputEmail3" name="phone" placeholder="Mời bạn nhập số điện thoại  " value="<?php echo $Editusers['phone'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label"> Address  </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputEmail3" name="address" placeholder=" Mời bạn nhập địa chỉ  " value="<?php echo $Editusers['address'] ?>">
                            </div>
                        </div>

                      
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-5">
                                <button type="submit" class="btn btn-success"> Cập nhật  </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

    <?php 
    /**
     * goi file footer
     */
         include __DIR__ ."/../../layouts/footer.php";
    ?>
    

   