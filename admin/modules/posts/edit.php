
    <?php 
    	include __DIR__ ."/../../autoload/autoload.php";

    	$category =  $db->fetchAll("category");
    	$error = [] ; 

    	$id = intval(getInput('id'));
	    if(empty($id))
	    {
	        $_SESSION['error'] = ' LỖI !  Dữ liệu gủi lên không đúng định dạng  ! ! ! ';
	        redirectAdmin('posts');
	    }
	    /**
	     * lấy id cần  sửa 
	     * kiểm tra xem có tồn tại trong csdl không 
	     */
	    
	    $Editposts = $db->fetchID('posts',$id);

	    /**
	     * nếu trống thì id không tồn tại
	     */

	    if ( empty($Editposts))
	    {
	        $_SESSION['error'] = ' LỖI !  Không tồn tại ID trong cơ sở dữ liệu ! ! ! ';
	        redirectAdmin('posts');
	    }

    	$data = [
    		'name'   => postInput("name"),
    		'content'   => postInput("content"),
    		'describes'   => postInput("describe"),
    		'active' => postInput("active"),
    		'slug'   => to_slug(postInput('name')),
    		'hot'   => postInput('hot'),
    		'categoryid'   =>postInput('categoryid')
    	];

	    if ($_SERVER["REQUEST_METHOD"] == "POST")
	    {

	        $rules = [
	            'name' => 'required',
	            'content' => 'required',
	            'describe' => 'required',
	            'active' => 'required',
	            
	            'hot' => 'required',
	            'categoryid' => 'required'
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
	            if ( isset($_FILES['thunbar']))
	            {
	               $file_name = $_FILES['thunbar']['name'];
	               $file_tmp  = $_FILES['thunbar']['tmp_name'];
	               $file_type = $_FILES['thunbar']['type'];
	               $file_erro = $_FILES['thunbar']['error'];

	               if ($file_erro == 0)
	               {
	                    $part = ROOT ."posts/";
	                    $data['thunbar'] = $file_name;
	                    move_uploaded_file($file_tmp,$part.$file_name);
	               }
	            }
	            $update = $db->update("posts",$data,array("id"=> $id));
	            if($update > 0)
	            {
	                $_SESSION['success'] = 'Thành công ! Cập nhật thành công ! ! ! ';
	                redirectAdmin('posts');
	            }
	            else
	            {

	                $_SESSION['error'] = ' Thất bại ! Dữ liệu ko thay đổi   ! ! ! ';
	                redirectAdmin('posts');
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
			        <h2>Thêm mới bài viết </h2>
			        <div class="clearfix"></div>
			    </div>
			    <!-- Hiện thông báo -->
			    <!-- Hiện thông báo -->
			    <?php include __DIR__ ."/../../layouts/notification.php"; ?>
			    <div class="x_content">
			  		<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
					    <div class="form-group">
					        <label for="inputEmail3" class="col-sm-2  control-label"> Danh mục</label>
					        <div class="col-sm-10">
					           	<select name="categoryid" id="" class="form-control">	
					           		<option value="">Mời bạn chọn danh mục </option>
					           		<?php foreach($category as $item) :?>
					           			<option value="<?php echo $item['id'] ?>" <?php echo $Editposts['id'] == $item['id'] ? "selected = 'selected'"  : ''?>><?php echo $item['name'] ?></option>
					           		<?php endforeach ; ?>
					           	</select>
					        </div>
					    </div>

					    <div class="form-group">
					        <label for="inputEmail3" class="col-sm-2 control-label">Tên bài </label>
					        <div class="col-sm-10">
					            <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Mời bạn nhập tên danh mục" value="<?php echo $Editposts['name'] ?>">
					        </div>
					    </div>

					    <div class="form-group">
					        <label for="inputEmail3" class="col-sm-2 control-label">Tiêu đề </label>
					        <div class="col-sm-10">
					            <input type="text" class="form-control" id="inputEmail3" name="describe" placeholder="Mời bạn nhập tên danh mục" value="<?php echo $Editposts['describes'] ?>">
					        </div>
					    </div>
					    <div class="form-group">
					        <label for="inputEmail3" class="col-sm-2 control-label">Nội dung </label>
					        <div class="col-sm-10">
					          
		                            <textarea class="ckeditor form-control" name="content" rows="6" data-error-container="#editor2_error"><?php echo $Editposts['content'] ?></textarea>
		                            <div id="editor2_error">
		                            </div>
		                        
					        </div>
					    </div>


					   <div class="form-group">
					    	<label for="exampleInputFile" class="col-sm-2 control-label">Thunbar</label>
					    	<div class="col-md-10">
					    		<input type="file" id="exampleInputFile" name="thunbar" class="form-control " >
					    	
					    	</div>
					    	<img src="<?php echo uploads() ?>posts/<?php echo $Editposts['thunbar'] ?>" alt="" class="img img-responsive " style="margin-left: 120px;" width="100px" height="100px">
					  	</div>


					    <div class="form-group">
					        <label for="inputEmail3" class="col-sm-2 control-label">Hiển thị </label>
					        <div class="col-sm-4">
					           <select name="active" class="form-control">
					           		<option value="1" <?php echo $Editposts['active'] == 1 ? "selected = 'selected'" : '' ?>> Có </option>
					           		<option value="0" <?php echo $Editposts['active'] == 0 ? "selected = 'selected'" : '' ?>> Không</option>
					           </select>
					        </div>

					        <label for="inputEmail3" class="col-sm-2 control-label">Nổi bật </label>
					        <div class="col-sm-4">
					           <select name="hot" class="form-control">
					           		<option value="1" <?php echo $Editposts['hot'] == 1 ? "selected = 'selected'" : '' ?>> Có </option>
					           		<option value="0" <?php echo $Editposts['hot'] == 0 ? "selected = 'selected'" : '' ?>> Không</option>
					           </select>
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
    

   