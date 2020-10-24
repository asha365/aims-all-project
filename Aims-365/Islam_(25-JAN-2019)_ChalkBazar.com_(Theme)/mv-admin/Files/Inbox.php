<?php 
	if(isset($_GET['read'])){
		$read_id = $_GET['read']; 
		$inbox_update_read_qry = "UPDATE tb_contact SET status=1 WHERE id='$read_id'";
		$inbox_update_read_res=$DB->update($inbox_update_read_qry); 
		if($inbox_update_read_res){
			header('Location:?page=Inbox'); 
		} 
	}
?>
<?php 
	if(isset($_GET['trash'])){
		$trash_id = $_GET['trash']; 
		$inbox_update_trash_qry = "UPDATE tb_contact SET deleted_at=1 WHERE id='$trash_id'";
		$inbox_update_trash_res=$DB->update($inbox_update_trash_qry); 
		if($inbox_update_trash_res){
			header('Location:?page=Inbox'); 
		} 
	}
?>

<?php /*all message*/
	$all_msg_qry = "SELECT * FROM tb_contact WHERE deleted_at=0"; 
	$all_msg_res = $DB->select($all_msg_qry); 
	if($all_msg_res){
		$all = mysqli_num_rows($all_msg_res); 
		
		if($all == ''){	
			$all = 0; 
		}		
	}
?>

<?php /*all trash*/
	$trs_msg_qry = "SELECT * FROM tb_contact WHERE deleted_at=1"; 
	$trs_msg_res = $DB->select($trs_msg_qry); 
	if($trs_msg_res){
		$trs = mysqli_num_rows($trs_msg_res); 
		if($trs == ''){	
			$trs = 0; 
		}
	}
?>

<div class="row">

	<div class="col-md-3">
		<button class="btn btn-primary btn-block">All Message (<?php echo $all; ?>)</button>
		<button class="btn btn-default btn-block">Sent Items (2)</button>
		<button class="btn btn-default btn-block">Spam (3)</button>
		<button class="btn btn-default btn-block">Trash (<?php echo $trs; ?>)</button>
	</div> 
	
	<div class="col-md-9">
		<h2>Inbox</h2><hr/>
		<table class="table table-responsive table-bordered">
			<tr>
				<th>Sl</th>
				<th>From</th>
				<th>Subject</th>
				<th>Action</th>
			</tr>
<?php 
	$msg_query = "SELECT * FROM tb_contact WHERE deleted_at=0";
	$msg_res = $DB->select($msg_query); 
	$i = 0; 
	while($msg_data = $msg_res->fetch_array()){
		$i++; 
		if($msg_data['status']==0){ $cls = "btn-primary"; }else{ $cls = "btn-default"; }
?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $msg_data['sender_email']; ?></td>
				<td><?php echo $msg_data['subject']; ?></td>
				<td>
					<a href="" class="btn btn-sm <?php echo $cls; ?>" data-toggle="modal" data-target="#inbox<?php echo $msg_data['id']; ?>">View</a>

					<a href="?page=Inbox&trash=<?php echo $msg_data['id']; ?>" type="button" class="btn btn-danger">Send To Trash</a>

					<a href="?page=Replay&rid=<?php echo $msg_data['id']; ?>" type="button" class="btn btn-danger">Replay</a>
				</td>
			</tr>
<!-- Modal -->
<div class="modal fade" id="inbox<?php echo $msg_data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Emailed By &mdash; <?php echo $msg_data['sender_email']; ?></h4>
      </div>
      <div class="modal-body">
        <h3>Subject &mdash; <?php echo $msg_data['subject']; ?></h3>
        <p>
        	<?php echo $msg_data['message']; ?>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="?page=Inbox&read=<?php echo $msg_data['id']; ?>" type="button" class="btn btn-info">Mark As Read</a>
        <a href="?page=Inbox&trash=<?php echo $msg_data['id']; ?>" type="button" class="btn btn-danger">Send To Trash</a>
      </div>
    </div>
  </div>
</div>
<?php 
	}
?>


		</table>

	</div>
</div>