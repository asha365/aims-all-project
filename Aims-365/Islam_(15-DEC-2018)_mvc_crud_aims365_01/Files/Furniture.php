<?php 
	if(isset($_POST['Furniture'])){
		$company = $_POST['company']; 
		$model = $_POST['model']; 
		$details = $_POST['details']; 
		$price = $_POST['price']; 

		if(empty($company) OR empty($model) OR empty($details) OR empty($price)){
			$msg = '<span style="color:red;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Field Must Not Empty !</span>';
			header('Location:index.php?page=Furniture&msg='.$msg);
		}else{

			$Furniture_query = "INSERT INTO tb_Furniture (company,model,details,price) VALUES ('$company','$model','$details','$price')";

			$result = $DB->insert($Furniture_query);
			if($result){
				$company=null; 
				$model=null; 
				$details='';
				$price='';

				$msg = '<span style="color:green;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Successfully Saved !</span>';
				header('Location:?page=Furniture&msg='.$msg);
			}

		}
	}
?>

<!----------------------------------------------->	
<div class="" style="min-height:400px;  ">	
	<div class="col-md-4">
<!------------------------------------>
<form action="?page=Furniture" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Company Name</label>
    <input name="company" type="text" class="form-control" id="exampleInputEmail1" placeholder="Company Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Model</label>
    <input name="model" type="text" class="form-control" id="exampleInputEmail1" placeholder="Model Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea name="details" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input name="price" type="text" class="form-control" id="exampleInputEmail1" placeholder="Price">
  </div>
  <button name="Furniture" type="submit" class="btn btn-primary">Save</button> 
  &nbsp; &nbsp; <?php if(isset($_GET['msg'])){ echo $_GET['msg'];} ?>
</form>
<!------------------------------------>
	</div>	
	<div class="col-md-8">
<!-------------------------------->
<table class="table table-bordered table-striped">
	<tr>
		<th>SL</th>
		<th>Company</th>
		<th>Model</th>
		<th>Price</th>
		<th style="width:28%;">Action</th>
	</tr>
<?php 
	$Furniture_load_qry = "SELECT * FROM tb_Furniture";
	$result = $DB->select($Furniture_load_qry); 
	if($result){
		$i = 0; 
		while($Furniture = $result->fetch_array()){
			$i++; 
?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $Furniture['company']; ?></td>
		<td><?php echo $Furniture['model']; ?></td>
		<td><?php echo $Furniture['price']; ?></td>
		<td>
			<a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Furniture_view<?php echo $Furniture['id']; ?>">View</a>
			<a href="" class="btn btn-warning btn-sm">Update</a>
			<a href="" class="btn btn-danger btn-sm">Remove</a>
		</td>
	</tr>
<!-------------------------------------------------------------->
<!-- Modal -->
<div class="modal fade" id="Furniture_view<?php echo $Furniture['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $Furniture['company'].' &nbsp; '.$Furniture['model']; ?></h4>
      </div>
      <div class="modal-body">
        <?php 
        	echo '<h2>Brand Name # '.$Furniture['company'].'</h2>';
        	echo '<h2>Model # '.$Furniture['model'].'</h2>';
        	echo '<h4>Price # '.$Furniture['price'].'.tk</h4>';
        	echo 'Specification # '.$Furniture['details']; 
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
	}
?>


	
	
</table>
<!-------------------------------->
	</div>
	
</div>
<!----------------------------------------------->
