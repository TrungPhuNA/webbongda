
    <?php 
    	include __DIR__ ."/../../autoload/autoload.php";
    	$error = [] ; 

    	/**
     * get dữ liệu từ url
     */
    $category = $db->fetchAll('category');
    recursive($category ,$parents = 0 ,$level = 1 ,$categorySort);
    
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


	    if ($_SERVER["REQUEST_METHOD"] == "POST")
	    {

	        $rules = [
	            'name' => 'required'
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
	            $data = [
		    		'name'   => postInput("name"),
		    		'active' => postInput("active"),
		    		'slug'   => to_slug(postInput('name')),
		    	];
	            $id_update = $db->update("category",$data,array( 'id' => $id ));
            	$_SESSION['success'] = 'Thành Công ! Cập nhật dữ liệu thành công ! ! !';
            	redirectAdmin('category');
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
			        <h2>Cập nhật danh mục </h2>
			        <div class="clearfix"></div>
			    </div>
			    <!-- Hiện thông báo -->
			    <!-- Hiện thông báo -->
			    <?php include __DIR__ ."/../../layouts/notification.php"; ?>
			    <div class="x_content">
			  		<form class="form-horizontal" action="" method="POST">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label">Nhóm danh mục</label>
                            <div class="col-sm-8">
                                <select name="parent_id" class="form-control">
                                    <option value="0">-- [ROOT]--</option>
                                    <?php foreach($categorySort as $item ) :?>

                                        <option value="<?php echo $item['id'] ?> " <?php echo $item['id'] ==  $EditCategory['parent_id'] ? "selected = 'selected'" : ''?>><?php echo $item['name'] ?></option>
                                    <?php endforeach ;?>
                                        
                                </select>
                            </div>
                        </div>
					    <div class="form-group">
					        <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label">Tên Danh Mục</label>
					        <div class="col-sm-8">
					            <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Mời bạn nhập tên danh mục" value="<?php echo $EditCategory['name'] ?>">
					        </div>
					    </div>

					    <div class="form-group">
					        <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label">Hiển thị </label>
					        <div class="col-sm-8">
					           <select name="active" class="form-control">
					           		<option value="1" <?php echo $EditCategory['active'] == 1 ? "selected = 'selected'" : '' ?>> Có </option>
					           		<option value="0" <?php echo $EditCategory['active'] == 0 ? "selected = 'selected'" : '' ?>> Không</option>
					           </select>
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
    

   