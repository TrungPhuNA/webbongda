
    <?php 
    	include __DIR__ ."/../../autoload/autoload.php";

    	$category = $db->fetchAll('category');
        recursive($category ,$parents = 0 ,$level = 1 ,$categorySort);

    	$error = [] ; 

    	$data = [
            'name'       => postInput("name"),
            'content'    => postInput("content"),
            'describes'  => postInput("describe"),
            'active'     => postInput("active"),
            'slug'       => to_slug(postInput('name')),
            'hot'        => postInput('hot'),
            'categoryid' =>postInput('categoryid')
    	];

	    if ($_SERVER["REQUEST_METHOD"] == "POST")
	    {

	        $rules = [
                'name'       => 'required',
                'content'    => 'required',
                'describe'   => 'required',
                'active'     => 'required',
                'thunbar'    => 'image',
                'hot'        => 'required',
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
	            $id_insert = $db->insert("posts",$data);
	            if($id_insert)
	            {
	                $_SESSION['success'] = 'Thành công ! Thêm mới dữ liệu thành công ! ! ! ';
	                redirectAdmin('posts');
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
					           		<?php foreach($categorySort as $item ) :?>

                                        <option value="<?php echo $item['id'] ?>"> <?php $str = ''; for($i = 0 ; $i < $item['level']; $i++){ echo $str; $str.="| - -";} ?> <?php echo $item['name'] ?>  </option>
                                    <?php endforeach ;?>
					           	</select>
					        </div>
					    </div>

					    <div class="form-group">
					        <label for="inputEmail3" class="col-sm-2 control-label">Tên bài </label>
					        <div class="col-sm-10">
					            <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Mời bạn nhập tên danh mục" value="<?php echo $data['name'] ?>">
					        </div>
					    </div>

					    <div class="form-group">
					        <label for="inputEmail3" class="col-sm-2 control-label">Mô tả ngắn </label>
					        <div class="col-sm-10">
					            <input type="text" class="form-control" id="inputEmail3" name="describe" placeholder="Mời bạn nhập tên danh mục" value="<?php echo $data['describes'] ?>">
					        </div>
					    </div>
					    <div class="form-group">
					        <label for="inputEmail3" class="col-sm-2 control-label">Nội dung </label>
					        <div class="col-sm-10">
					          
		                            <textarea class="ckeditor form-control" name="content" rows="6" data-error-container="#editor2_error"><?php echo $data['content'] ?></textarea>
		                            <div id="editor2_error">
		                            </div>
		                        
					        </div>
					    </div>


					   <div class="form-group">
					    	<label for="exampleInputFile" class="col-sm-2 control-label">Thunbar</label>
					    	<div class="col-md-10">
					    		<input type="file" id="exampleInputFile" name="thunbar" class="form-control " >
					    	
					    	</div>
					  	</div>


					    <div class="form-group">
					        <label for="inputEmail3" class="col-sm-2 control-label">Hiển thị </label>
					        <div class="col-sm-4">
					           <select name="active" class="form-control">
					           		<option value="1"> Có </option>
					           		<option value="0"> Không</option>
					           </select>
					        </div>

					        <label for="inputEmail3" class="col-sm-2 control-label">Nổi bật </label>
					        <div class="col-sm-4">
					           <select name="hot" class="form-control">
					           		<option value="1"> Có </option>
					           		<option value="0"> Không</option>
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
    

   