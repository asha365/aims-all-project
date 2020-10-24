<?php /*UPDATE MODULE*/
	if(isset($_POST['update_menu'])){
		$update_id = $_POST['update_id']; 
		$menu_title = $_POST['menu_title'];
		$menu_name = $_POST['menu_name']; 

		if(empty($update_id) OR empty($menu_title) OR empty($menu_name)){
			$msg = '<span style="color:red;">Filed Must Not Empty</span>';
			header('Location:?page=Menu-option&msg='.$msg); 
		}else{
			$menu_update_qry = " UPDATE tb_menu
				SET 
				menu_title = '$menu_title', 
				menu_name = '$menu_name'
				WHERE id = '$update_id'";

			$res_update = $DB->insert($menu_update_qry); 
			if($res_update){
				$msg = '<span style="color:Yellow;">Update Successfully !</span>';
				header('Location:?page=Menu-option&msg='.$msg); 
			}
		}	
	}
?>
<?php /*DATA FETCH MODULE FOR UPDATE*/
	if(isset($_GET['upid'])){
		$uid = $_GET['upid']; 
		if($uid){
			$update_fetch_qry = "SELECT * FROM tb_menu WHERE id='$uid'";
			$update_fetch_result = $DB->select($update_fetch_qry); 
			if($update_fetch_result){
				$update_fetch_data = $update_fetch_result->fetch_assoc(); 
			}
		}
	}
?>
<?php 
	if(isset($_POST['add_menu'])){
		$menu_title = $_POST['menu_title'];
		$menu_name = $_POST['menu_name']; 

		if(empty($menu_title) OR empty($menu_name)){
			$msg = '<span style="color:red;">Filed Must Not Empty</span>';
			header('Location:?page=Menu-option&msg='.$msg); 
		}else{
			$menu_save_qry = "INSERT INTO tb_menu (menu_title, menu_name) VALUES ('$menu_title','$menu_name')";
			$res_save = $DB->insert($menu_save_qry); 
			if($res_save){
				$msg = '<span style="color:green;">Save Successfully !</span>';
				header('Location:?page=Menu-option&msg='.$msg); 
			}
		}
	}
?>

<?php /*DELETE MODULE FOR MENU OPTION CUSTOMIZATION*/
	if(isset($_GET['delid'])){
		$delid = $_GET['delid']; 
		if(isset($delid)){
			$del_qry = "DELETE FROM tb_menu WHERE id='$delid'"; 
			$res_del = $DB->delete($del_qry); 
			if($res_del){
				header('Location:?page=Menu-option'); 
			}
		}
	}
?>
<!----------------------------------------------->	
<div class="" style="min-height:400px;  ">	
	<div class="col-md-4">
<!------------------------------------>
<?php 
	if(isset($update_fetch_data)){
?>
<form action="" method="post">
	<input name="update_id" type="hidden" value="<?php echo $update_fetch_data['id']; ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Menu Title</label>
    <input name="menu_title" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $update_fetch_data['menu_title']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Menu Name</label>
    <input name="menu_name" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $update_fetch_data['menu_name']; ?>">
  </div>
  <button name="update_menu" type="submit" class="btn btn-warning">Update Menu</button>
  <?php if(isset($_GET['msg'])){ echo $_GET['msg']; } ?>
</form>
<?php 
	}else{
?>
<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Menu Title</label>
    <input name="menu_title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Menu Title">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Menu Name</label>
    <input name="menu_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Menu Name">
  </div>
  <button name="add_menu" type="submit" class="btn btn-primary">Add Menu</button>
  <?php if(isset($_GET['msg'])){ echo $_GET['msg']; } ?>
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
	$mobile_load_qry = "SELECT * FROM tb_menu";
	$result = $DB->select($mobile_load_qry); 
	if($result){
?>

	<tr>
		<th>SL</th>
		<th>Menu Title</th>
		<th>Menu Name</th>
		<th style="width:28%;">Action</th>
	</tr>
<?PHP 
	
		$i=0; 
		while($mobile = $result->fetch_array()){	
			$i++; 
?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $mobile['menu_title']; ?></td>
		<td><?php echo $mobile['menu_name']; ?></td>
		<td>
			<a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#mobile_view<?php echo $mobile['id']; ?>">View</a>
			<a href="?page=Menu-option&upid=<?php echo $mobile['id']; ?>" class="btn btn-warning btn-sm">Update</a>
			<a href="?page=Menu-option&delid=<?php echo $mobile['id'];?>" class="btn btn-danger btn-sm">Remove</a>
		</td>
	</tr>
<!-------------------------------------------------------------->
<!-- Modal -->
<div class="modal fade" id="mobile_view<?php echo $mobile['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <?php 
        	echo '<h2>Menu Title # '.$mobile['menu_title'].'</h2>';
        	echo '<h2>Menu Name # '.$mobile['menu_name'].'</h2>';; 
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
