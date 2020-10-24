<?php 
	if(isset($_GET['type'])){
		$admin_id = $_GET['id']; 
		$admin_type = $_GET['type']; 
		$user_qry = "UPDATE tb_user SET type='$admin_type' WHERE id='$admin_id'";
		$user_result = $DB->update($user_qry); 
		if($user_result){
			header('Location:?page=Useroption'); 
		}
	}
?>
<?php /*DELETE MODULE FOR MENU OPTION CUSTOMIZATION*/
	if(isset($_GET['delid'])){
		$delid = $_GET['delid']; 
		if(isset($delid)){
			$del_qry = "DELETE FROM tb_user WHERE id='$delid'"; 
			$res_del = $DB->delete($del_qry); 
			if($res_del){
				header('Location:?page=Useroption'); 
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
	$user_load_qry = "SELECT * FROM tb_user";
	$user_result = $DB->select($user_load_qry); 
	if($user_result){
?>

	<tr>
		<th>SL</th>
		<th>Username</th>
		<th>Email</th>
		<th style="width:35%;">Type</th>		
		<th style="width:18%;">Action</th>
	</tr>
<?PHP 
	
		$i=0; 
		while($user = $user_result->fetch_array()){	
			$i++; 
		if($user['type'] != 'admin'){

?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $user['username']; ?></td>
		<td><?php echo $user['email']; ?></td>
		<td>
<?php 
	$type = $user['type']; 
	if($type=='admin'){
?>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=admin" class="btn btn-primary btn-xs">Admin</a>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=manager" class="btn btn-default btn-xs">Manager</a>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=editor" class="btn btn-default btn-xs">Editor</a>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=production" class="btn btn-default btn-xs">Production</a>
<?php 
	}elseif($type=='manager'){
?>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=admin" class="btn btn-default btn-xs">Admin</a>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=manager" class="btn btn-primary btn-xs">Manager</a>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=editor" class="btn btn-default btn-xs">Editor</a>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=production" class="btn btn-default btn-xs">Production</a>
<?php 
	}elseif($type=='editor'){
?>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=admin" class="btn btn-default btn-xs">Admin</a>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=manager" class="btn btn-default btn-xs">Manager</a>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=editor" class="btn btn-primary btn-xs">Editor</a>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=production" class="btn btn-default btn-xs">Production</a>
<?php 
	}elseif($type=='production'){
?>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=admin" class="btn btn-default btn-xs">Admin</a>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=manager" class="btn btn-default btn-xs">Manager</a>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=editor" class="btn btn-default btn-xs">Editor</a>
			<a href="?page=Useroption&id=<?php echo $user['id']; ?>&type=production" class="btn btn-primary btn-xs">Production</a>
<?php 
	}
?>

		</td>
		<td>
			<a href="?page=Useroption&delid=<?php echo $user['id'];?>" class="btn btn-danger btn-xs">Remove</a>
		</td>
	</tr>
<!-------------------------------------------------------------->

<?php 
			}
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
