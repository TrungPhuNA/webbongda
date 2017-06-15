
    <?php 
        include __DIR__ ."/../../autoload/autoload.php";
         /**
         * lấy dữ liệu từ đệ quy
         *
         */
        $id = intval(getInput('id'));
        if(empty($id))
        {
            $_SESSION['error'] = ' LỖI !  Dữ liệu gủi lên không đúng định dạng  ! ! ! ';
            redirectAdmin('video');
        }
        /**
         * lấy id cần  sửa 
         * kiểm tra xem có tồn tại trong csdl không 
         */
        
        $Editvideo = $db->fetchID('video',$id);

        /**
         * nếu trống thì id không tồn tại
         */

        if ( empty($Editvideo))
        {
            $_SESSION['error'] = ' LỖI !  Không tồn tại ID trong cơ sở dữ liệu ! ! ! ';
            redirectAdmin('video');
        }
       
        $error = [] ; 

        $data = [
            'name'      => postInput("name"),
            'url'       => postInput("url"),
            'slug'      => to_slug(postInput('name')),
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {

            $rules = [
                'name' => 'required',
                'url'  => 'required'
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
                
                $update = $db->update("video",$data,array("id"=>$id));
                if($update > 0)
                {
                    $_SESSION['success'] = 'Thành công ! Thêm mới dữ liệu thành công ! ! ! ';
                    redirectAdmin('video');
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
                    <h2>Thêm mới  video </h2>
                    <div class="clearfix"></div>
                </div>
                <!-- Hiện thông báo -->
                <!-- Hiện thông báo -->
                <?php include __DIR__ ."/../../layouts/notification.php"; ?>
                <div class="x_content">
                    <form class="form-horizontal" action="" method="POST">
                        
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label">Tiêu đề</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Mời bạn nhập tên danh mục" value="<?php echo $Editvideo['name'] ?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label"> Url </label>
                            <div class="col-sm-8">
                                <textarea name="url" class="form-control"><?php echo $Editvideo['url'] ?></textarea>
                              
                            </div>
                        </div>

                      
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-5">
                                <button type="submit" class="btn btn-success"> Cập nhật </button>
                                <a href="index.php" class="btn btn-danger"> Trở về </a>
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
    

   