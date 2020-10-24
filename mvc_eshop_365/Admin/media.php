 <!--------------------------->
<!------------------------------------>
<!-------------------------------------------->
<!----------------------------------------------------->
<!-------------------------------------------------------------------->
<!-------------------------------------------------------------------->
<?php  include 'header.php';  ?>
<?php  include 'sidebar.php';  ?>
<!-------------------------------------------------------------------->
<!-------------------------------------------------------------------->

<!--================================================================-->
<!--================================================================-->

        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>
                            Media Options
                            <button class="btn btn-info pull-right"  data-toggle="modal" data-target="#addMedia">ADD NEW MEDIA FILES </button>
                        </h2>
                    </div>
                </div>
<!----------->
<!-- Modal -->
<div class="modal fade" id="addMedia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form action="media.php" method="post"  enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Media Files </h4>
          </div>
          <div class="modal-body">

   	<div class="form-group">
   	 <label for="exampleInputFile">File input</label>
   		 <input name="media_name" type="file" id="exampleInputFile"  onchange="readURL(this);" >
  	  <p class="help-block">Example block-level help text here.</p>
  </div>

    <img id="blah" src="#" alt="" style="width:100%; height: 300px;"/>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" name="upload_image"class="btn btn-primary">Upload Files</button>
          </div>
        </div>
    </form>
  </div>
</div>
<!----------->                
                <hr />
                <div class="row">
                    <div class="col-lg-12">
 
    
        <div class="panel panel-success">
            <div class="panel-heading">
                Media Files !
            </div>

            <div class="panel-body">                       
<!--------->
<div class="row">
	<?php 

			$media_qry="SELECT * FROM tb_mvc_365_media";
			$media_result=$DB->select($media_qry);
			if($media_result){
				while($media_data=$media_result->fetch_array()){
					?>

  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="../images/post_img/<?php echo $media_data['media_name'];?>" alt="n/a" style="width:100%; height: 120px;">
      <div class="caption">
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <a href="#" class="btn btn-primary btn-sm" role="button"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a> 
            <a href="media.php?media_delid=<?php echo $media_data['media_id']; ?>&media=<?php echo $media_data['media_name']; ?>" class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        </div>
      </div>
    </div>
  </div>
  

		<?php 
				}
			}

	?>


</div>
<!--------->                
            </div>
        </div>
        
                           
    

    
        </div>
                    </div>
            </div>


        </div>
        <!--END PAGE CONTENT -->


<!-------------------------------------------------------------------->
<!-------------------------------------------------------------------->
<?php include 'footer.php'; ?>
<!-------------------------------------------------------------------->
<!---------------------------------------------------------------->
<!----------------------------------------------------->
<!-------------------------------------------->
<!------------------------------------>
<!--------------------------->