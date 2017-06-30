
    <?php 
         $open = "video";
        include __DIR__ ."/../../autoload/autoload.php";
         /**
         * lấy dữ liệu từ đệ quy
         *
         */
       
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
                
                $id_insert = $db->insert("video",$data);
                if($id_insert)
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
                                <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Mời bạn nhập tên danh mục" value="<?php echo $data['name'] ?>">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label"> Url </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" name="url" placeholder="Mời bạn nhập link video " value="<?php echo $data['url'] ?>">
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
    

   