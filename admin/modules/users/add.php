
    <?php 
        include __DIR__ ."/../../autoload/autoload.php";
         /**
         * lấy dữ liệu từ đệ quy
         *
         */
       
        $error = [] ; 

        $data = [
            'name'     => postInput("name"),
            'email'    => postInput("email"),
            'phone'    => postInput("phone"),
            'address'  => postInput("address"),
            'password' => "123456789"
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {

            $rules = [
                'name'    => 'required',
                'email'   => 'required',
                'phone'   => 'required',
                'address' => 'required'
            ];

            $request = new Validation($_POST, $rules);
            $email  = $data['email'];
            $chek = $db->fetchOne("users"," email = '".$email."'");
             $flag = 1;
            if( !empty($chek) )
            {
                $flag = 0;
                $_SESSION['error'] = " Email Đã tồn tại ";
            }
            if ($request->checkerror() === FALSE || $flag == 0)
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
                $id_insert = $db->insert("users",$data);
                if($id_insert)
                {
                    $_SESSION['success'] = 'Thành công ! Thêm mới dữ liệu thành công ! ! ! ';
                    redirectAdmin('users');
                }
                else
                {
                    $_SESSION['error'] = ' Thất bại ! Thêm mới dữ liệu thất bại   ! ! ! ';
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
                                <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Mời bạn nhập tên danh mục" value="<?php echo $data['name'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label"> Email </label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Mời bạn nhập email " value="<?php echo $data['email'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label"> Phone  </label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="inputEmail3" name="phone" placeholder="Mời bạn nhập số điện thoại  " value="<?php echo $data['phone'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label"> Address  </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputEmail3" name="address" placeholder=" Mời bạn nhập địa chỉ  " value="<?php echo $data['address'] ?>">
                            </div>
                        </div>

                      
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-5">
                                <button type="submit" class="btn btn-success"> Thêm mới </button>
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
    

   