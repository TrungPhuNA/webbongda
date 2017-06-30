
    <?php 
        $open = "profile";
        include __DIR__ ."/../../autoload/autoload.php";
         /**
         * lấy dữ liệu từ đệ quy
         *
         */
    
        $error = [] ; 

        
        
        $Editadmin = $db->fetchID('admin',$adminid);

        /**
         * nếu trống thì id không tồn tại
         */

        if ( empty($Editadmin))
        {
            $_SESSION['error'] = ' LỖI !  Không tồn tại ID trong cơ sở dữ liệu ! ! ! ';
            redirectAdmin('admin');
        }
       
        $error = [] ; 

        $data = [
            'name'        => postInput("name"),
            'phone'       => postInput("phone"),
            'email'       => postInput("email"),
            'address'     => postInput("address"),
            'about'       => postInput("about"),
            'level'       => intval(postInput("level"))
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {

            $rules = [
                'name'        => 'required',
                'phone'       => 'required',
                'email'       => 'required',
                'address'     => 'required',
                'about'       => 'required'
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
                if(postInput('password') != '')
                {
                    $data['password'] = md5(postInput('password'));
                }
                $id_update = $db->update("admin",$data, array('id' => $adminid ));
                if($id_update > 0)
                {
                    $_SESSION['success'] = 'Thành công ! Cập nhật dữ liệu thành công ! ! ! ';
                    redirectAdmin('profile');
                }
                else
                {
                    redirectAdmin('profile');
                    $_SESSION['error'] = ' Thất bại ! Dữ liệu ko thay đổi   ! ! ! ';
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
                    <h2>Thêm mới  admin  </h2>
                    <div class="clearfix"></div>
                </div>
                <!-- Hiện thông báo -->
                <!-- Hiện thông báo -->
                <?php include __DIR__ ."/../../layouts/notification.php"; ?>
                <div class="x_content">
                    <form class="form-horizontal" action="" method="POST">
                        
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label"> Tên </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Mời bạn nhập tên " value="<?php echo $Editadmin['name'] ?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label"> Email </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Mời bạn nhập email  " value="<?php echo $Editadmin['email'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label"> Phone </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="inputEmail3" name="phone" placeholder="Mời bạn nhập số điện thoại  " value="<?php echo $Editadmin['phone'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label"> Password </label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="inputEmail3" name="password" placeholder="Mời bạn nhập mật khẩu  " value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label"> Address </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" name="address" placeholder="Mời bạn nhập địa chỉ  " value="<?php echo $Editadmin['address']  ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label"> Level </label>
                            <div class="col-sm-8">
                                <select name="level" class="form-control">
                                    <option value="1" <?php echo $Editadmin['level'] == 1 ? "selected = 'selected'" : '' ?>>CTV</option>
                                    <option value="2" <?php echo $Editadmin['level'] == 2 ? "selected = 'selected'" : '' ?>>Admin</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label"> About </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" name="about" placeholder="Mời bạn nhập địa chỉ  " value="<?php echo $Editadmin['about']  ?>">
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
    

   