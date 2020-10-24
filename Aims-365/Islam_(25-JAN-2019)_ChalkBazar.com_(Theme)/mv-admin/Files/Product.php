<?php /* update data */
	if(isset($_POST['update_product'])){
		$id = $_POST['update_id']; 
		$old_image = $_POST['old_image'];
		$product_name = $_POST['product_name']; 
		$product_category = $_POST['product_category']; 
		$product_details = $_POST['product_details']; 
		$product_price = $_POST['product_price']; 

		$product_image = $_FILES['product_image']['name']; 
		$product_tmp_name = $_FILES['product_image']['tmp_name'];
		$location = '../prof/'; 

		if(empty($product_image)){

			if(empty($product_name) OR empty($product_category) OR empty($product_details) OR empty($product_price) OR empty($old_image)){
				$msg = '<span style="color:red;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Field Must Not Empty !</span>';
				header('Location:index.php?page=Product&msg='.$msg);
			}else{
				//move_uploaded_file($product_tmp_name, $location.$product_image); 

				$mobile_query = "UPDATE tb_product
				SET 
				product_name = '$product_name',
				product_category   = '$product_category',
				product_details = '$product_details',
				product_price   = '$product_price'				
				WHERE id='$id'
			"; 

				$result = $DB->insert($mobile_query);
				if($result){
					$company=null; 
					$model=null; 
					$details='';
					$price='';

					$msg = '<span style="color:yellow;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Successfully Updated !</span>';
					header('Location:index.php?page=Product&msg='.$msg);
				}
			}
		}else{
				move_uploaded_file($product_tmp_name, $location.$product_image); 
				unlink('../prof/'.$old_image); 

				$mobile_query = "UPDATE tb_product
				SET 
				product_name = '$product_name',
				product_category   = '$product_category',
				product_details = '$product_details',
				product_price   = '$product_price',
				product_image = '$product_image'			
				WHERE id='$id'
			"; 
			
			$result = $DB->insert($mobile_query);
				if($result){					$company=null;  $model=null;  $details=''; $price='';
					$msg = '<span style="color:yellow;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Successfully Updated !</span>';
					header('Location:index.php?page=Product&msg='.$msg);
				}
		}		
	}//END OF DATA updating..
?>

<?php /*fetch data id for update*/
	if(isset($_GET['upid'])){
		$upid = $_GET['upid']; 
		$qry_update = "SELECT * FROM tb_product WHERE id='$upid'";
		$update_result = $DB->insert($qry_update); 
		if($update_result){
			$update_data = $update_result->fetch_assoc(); 
		}
	}
?>

<?php /*delete data from database*/
	if(isset($_GET['delid'])){
		$delid = $_GET['delid'];
		$delimg = $_GET['del_img'];  

		$qry_delete_mobile = "DELETE FROM tb_product WHERE id=$delid";
		$result = $DB->delete($qry_delete_mobile); 
		if($result){
			unlink('../prof/'.$delimg); 
			$msg = '<span style="color:red;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Deleted Done !</span>';
			header('Location:index.php?page=Product&msg='.$msg);
		}
	}
?>

<?php /*INSERT NEW DATA */
	if(isset($_POST['product'])){
		$product_name = $_POST['product_name']; 
		$product_category = $_POST['product_category']; 
		$product_details = $_POST['product_details']; 
		$product_price = $_POST['product_price']; 

		$product_image = $_FILES['product_image']['name']; 
		$product_tmp_name = $_FILES['product_image']['tmp_name'];

	 	$location = '../prof/';
	
		

		if(empty($product_name) OR empty($product_category) OR empty($product_details) OR empty($product_price) OR empty($product_image)){
			$msg = '<span style="color:red;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Field Must Not Empty !</span>';
			header('Location:index.php?page=Product&msg='.$msg);
		}else{
			move_uploaded_file($product_tmp_name, $location.$product_image);

			$mobile_query = "INSERT INTO tb_product (product_name,product_category,product_details,product_price,product_image) VALUES ('$product_name','$product_category','$product_details','$product_price','$product_image')";

			$result = $DB->insert($mobile_query);
			if($result){
				$product_name=null; 
				$product_category=null; 
				$product_details='';
				$product_price='';

				$msg = '<span style="color:green;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Successfully Saved !</span>';
				header('Location:index.php?page=Product&msg='.$msg);
			}

		}
	}//END OF DATA INSERTING..
?>

<!----------------------------------------------->	
<div class="" style="min-height:400px;  ">	
	<div class="col-md-4">
<!------------------------------------>
<?php 
	if(isset($update_data)){
?>
<form action="index.php?page=Product" method="post"  enctype="multipart/form-data">
  <input type="hidden" name="update_id" value="<?php echo $update_data['id']; ?>">
  <input type="hidden" name="old_image" value="<?php echo $update_data['product_image']; ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input name="product_name" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $update_data['product_name']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Category</label>
    
  	<select name="product_category" class="form-control">
  		<option value="">Select Category !</option>
<?php 
	$catid = $update_data['product_category'];
	
	$cat_qry = "SELECT * FROM tb_menu"; 
	$res_cat = $DB->select($cat_qry); 
	if($res_cat){
		while($data_menu = $res_cat->fetch_array()){
?>
<option value="<?php echo $data_menu['id'];?>"  <?php if($catid==$data_menu['id']){ echo 'selected'; } ?> ><?php echo $data_menu['menu_title']; ?></option>
<?php 			
		}
	}
?>
  	</select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Product Details</label>
    <textarea name="product_details" class="form-control" rows="4"><?php echo $update_data['product_details']; ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input name="product_price" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $update_data['product_price']; ?>">
  </div>

  <div class="form-group">
  	<img src="../prof/<?php echo $update_data['product_image']; ?>" class="img-responsive" alt="" style=" width:100%; height:100px; ">
    <label for="exampleInputFile">Product Image</label>
    <input name="product_image" type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>

  <button name="update_product" type="submit" class="btn btn-warning">Update Product</button> 
  &nbsp; &nbsp; <?php if(isset($_GET['msg'])){ echo $_GET['msg'];} ?>
</form>
<?php 
	}else{
?>
<form action="index.php?page=Product" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input name="product_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Product Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Category</label>
  	<select name="product_category" class="form-control">
  		<option value="">Select Category !</option>
<?php 
	$cat_qry = "SELECT * FROM tb_menu"; 
	$res_cat = $DB->select($cat_qry); 
	if($res_cat){
		while($data_menu = $res_cat->fetch_array()){
?>
<option value="<?php echo $data_menu['id'];?>"><?php echo $data_menu['menu_title']; ?></option>
<?php 			
		}
	}

?>
  	</select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Product Details</label>
    <textarea name="product_details" class="form-control" rows="4"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input name="product_price" type="text" class="form-control" id="exampleInputEmail1" placeholder="Price">
  </div>

  <div class="form-group">
    <label for="exampleInputFile">Product Image</label>
    <input name="product_image" type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>

  <button name="product" type="submit" class="btn btn-primary">Save</button> 
  &nbsp; &nbsp; <?php if(isset($_GET['msg'])){ echo $_GET['msg'];} ?>
</form>
<?php 
	}
?>

<!------------------------------------>
	</div>	
	<div class="col-md-8">
<!-------------------------------->
<table class="table table-bordered table-striped">

<?php 
	$mobile_load_qry = "SELECT * FROM tb_product";
	$result = $DB->select($mobile_load_qry); 
	if($result){
?>

	<tr>
		<th>SL</th>
		<th>Product</th>
		<th>Category</th>
		<th>Price</th>
		<th style="width:28%;">Action</th>
	</tr>
<?PHP 
	
		$i=0; 
		while($mobile = $result->fetch_array()){	
			$i++; 
?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $mobile['product_name']; ?></td>
		<td><?php echo $mobile['product_category']; ?></td>
		<td><?php echo $mobile['product_price']; ?></td>
		<td>
			<a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#mobile_view<?php echo $mobile['id']; ?>">View</a>
			<a href="?page=Product&upid=<?php echo $mobile['id']; ?>" class="btn btn-warning btn-sm">Update</a>
			<a href="?page=Product&delid=<?php echo $mobile['id'];?>&del_img=<?php echo $mobile['product_image']; ?>" class="btn btn-danger btn-sm">Remove</a>
		</td>
	</tr>
<!-------------------------------------------------------------->
<!-- Modal -->
<div class="modal fade" id="mobile_view<?php echo $mobile['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $mobile['product_name']; ?></h4>
      </div>
      <div class="modal-body">
        <?php 
        	echo '<h2>Brand Name # '.$mobile['product_category'].'</h2>';
        	echo '<h2>Model # '.$mobile['product_details'].'</h2>';
        	echo '<h4>Price # '.$mobile['product_price'].'.tk</h4>';
        	echo 'Specification # '.$mobile['product_details']; 
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-------------------------------------------------------------------------->

<?php 
		}
	}ELSE{
		
		ECHO '<H1>No Data Found !</h1>';
	}
?>


	
	
</table>
<!-------------------------------->
	</div>
	
</div>
<!----------------------------------------------->
