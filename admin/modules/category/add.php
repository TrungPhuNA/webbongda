
    <?php 
    	include __DIR__ ."/../../autoload/autoload.php";
         /**
         * lấy dữ liệu từ đệ quy
         *
         */
        $category = $db->fetchAll('category');
        recursive($category ,$parents = 0 ,$level = 1 ,$categorySort);

    	$error = [] ; 

    	$data = [
            'name'      => postInput("name"),
            'active'    => postInput("active"),
            'parent_id' => postInput("parent_id"),
            'slug'      => to_slug(postInput('name')),
    	];

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
	            
	            $id_insert = $db->insert("category",$data);
	            if($id_insert)
	            {
	                $_SESSION['success'] = 'Thành công ! Thêm mới dữ liệu thành công ! ! ! ';
	                redirectAdmin('category');
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
			        <h2>Thêm mới danh mục </h2>
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
                                        <option value="<?php echo $item['id'] ?>"> <?php $str = ''; for($i = 0 ; $i < $item['level']; $i++){ echo $str; $str.="| - -";} ?> <?php echo $item['name'] ?>  </option>
                                    <?php endforeach ;?>
                                        
                                </select>
                            </div>
                        </div>
					    <div class="form-group">
					        <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label">Tên Danh Mục</label>
					        <div class="col-sm-8">
					            <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Mời bạn nhập tên danh mục" value="<?php echo $data['name'] ?>">
					        </div>
					    </div>

					    <div class="form-group">
					        <label for="inputEmail3" class="col-sm-2 col-md-offset-1 control-label">Hiển thị </label>
					        <div class="col-sm-8">
					           <select name="active" class="form-control">
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
    

   