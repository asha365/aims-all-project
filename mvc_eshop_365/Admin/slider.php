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
                            Slider Options
                            <button class="btn btn-info pull-right"  data-toggle="modal" data-target="#addMedia">ADD SLIDER IMAGE </button>
                        </h2>
                    </div>
                </div>
<!----------->
<!-- Modal -->
<div class="modal fade" id="addMedia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Slider Images </h4>
          </div>
          <div class="modal-body">

   <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="slider_image" id="exampleInputFile"  onchange="readURL(this);" >
    <p class="help-block">800x300 or Less & Not more than 2MB !</p>
  </div>
    <img id="blah" src="#" alt="" style="width:100%; height: 300px;"/>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" name="slider_save" class="btn btn-primary">Upload Files</button>
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
  $slider_qry = "SELECT * FROM tb_mvc_365_slider"; 
  $slider_result = $DB->select($slider_qry);
  if($slider_result){
    while($slider_data = $slider_result->fetch_array()){
?>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="../images/slider_img/<?php echo $slider_data['slider_image']; ?>" alt="n/a" style="width:100%; height: 120px;">
      <div class="caption">
        <div class="btn-group btn-group-justified" role="group" aria-label="..." style="margin-bottom:3px; ">
            <a href="slider.php?pin_id=<?php echo $slider_data['slider_id']; ?>" class="btn btn-<?php if($slider_data['slider_pin']==1){ echo 'warning'; }else{ echo 'default'; } ?> btn-sm" role="button"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></a> 
        </div>
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
<?php
  if($slider_data['slider_status']==1){
?>
            <a href="slider.php?slider_deactive=<?php echo $slider_data['slider_id']; ?>" class="btn btn-info btn-sm" role="button"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a> 
<?php 
  }else{
?>
            <a href="slider.php?slider_active=<?php echo $slider_data['slider_id']; ?>" class="btn btn-default btn-sm" role="button"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a> 
<?php     
  }
?>          
            <a href="slider.php?slider_del=<?php echo $slider_data['slider_id']; ?>&img=<?php echo $slider_data['slider_image']; ?>" class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        </div>
      </div>
    </div>
  </div>
<?php 
    }//end of slider qry while..
  } //end of slider result if...
?>


  

<!-----

  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="../images/slider_img/04.jpg" alt="n/a" style="width:100%; height: 120px;">
      <div class="caption">
        <div class="btn-group btn-group-justified" role="group" aria-label="..." style="margin-bottom:3px; ">
            <a href="#" class="btn btn-warning btn-sm" role="button"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></a> 
        </div>
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <a href="#" class="btn btn-primary btn-sm" role="button"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a> 
            <a href="#" class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        </div>
      </div>
    </div>
  </div>-->

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