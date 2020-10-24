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

<!--================================================================-->
<!--================================================================-->


<!--================================================================-->
<!--================================================================-->

<!-------------------------------------------------------------------->
<!-------------------------------------------------------------------->

        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="font-weight:bold; ">Post List  Options
                            <a class="pull-right btn btn-sm btn-primary" href="postlist.php"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
                            
                            <a class="pull-right btn btn-sm btn-info" href="posts.php" style="margin-right:10px; "><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Post </a>
                            
                            <?php  
                                if(isset($_GET['error'])){
                                   echo '<small><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;"></span></small>';  
                                }

                                if(isset($_GET['success'])){
                                    echo '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span></small>';
                                }
                            ?>
                        </h1>
                    </div>
                </div>
                <hr />

                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Post List !
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Page Name</th>
                                            <th>Post Title</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                  </thead>
                <!--------------------------------------------------------------------->
                <!--------------------------------------------------------------------->
                <!--------------------------------------------------------------------->
                <!--------------------------------------------------------------------->
                  <tbody>
                        <?php //post list function .............................
                            $get_post_qry = "SELECT * FROM tb_mvc_365_posts"; 
                            $get_post_result = $DB->select($get_post_qry);
                            if($get_post_result){
                            	$i=0;
                                while($get_post_data = $get_post_result->fetch_array()){
                                	$i++;
                        ?>

                  <!--------------------------------------------------------------------->
                  <!--------------------------------------------------------------------->
                  <!--------------------------------------------------------------------->
                        							<tr class="odd gradeX">
                        							    <td><?php echo $i;?></td>
                        							    <td>
                        <?php //page name  create funcation............................
                                $postlist_name = "SELECT * FROM tb_mvc_365_pages WHERE   page_id='".$get_post_data['post_page_id']."'";
                                $result_postlist = $DB->select($postlist_name);
                                if($result_postlist){
                                  $data_postlist = $result_postlist->fetch_array();}
                                  echo $data_postlist['page_name'];
                          ?>
                      </div>

                       </td>

                <!--------------------------------------------------------------------->
                <!--------------------------------------------------------------------->
                <!--------------------------------------------------------------------->

							    <td><?php echo $get_post_data['post_title'];?></td>

<!--------------------------------------------------------------------------------------------->
<!-------------------------------------------status on off option------------------------------>
<!--------------------------------------------------------------------------------------------->
	         <td>
 <?php 
			 if($get_post_data['post_status']==1){
						?>
								<div class="btn-group" role="group" aria-label="...">

  								  <a href="postlist.php?postlist_status_on=<?php echo $get_post_data['post_id']; ?>" type="button" class="btn btn-xs btn-info">ON</a>
  								  <a type="button" class="btn btn-xs btn-default">OFF</a>

								</div>

<?php }else{ ?>
								
								<div class="btn-group" role="group" aria-label="...">

  								  <a type="button" class="btn btn-xs btn-default">ON</a>
  								  <a href="postlist.php?postlist_status_off=<?php echo $get_post_data['post_id'];?>" type="button" class="btn btn-xs btn-info">OFF</a>

								</div>

 <!--------------------------------------------------------------------------------------------->
<!-------------------------------------------status on off option-------------------------------->
<!--------------------------------------------------------------------------------------------->
	<?php 
      }//else end.................
   ?>
    </td>

 <!--------------------------------------------------------------------------------------------->
<!-------------------------------------------action  option-------------------------------->
<!--------------------------------------------------------------------------------------------->
      <td class="center" style="text-align: center;">

           <a href="data-toggle="modal" data-toggle="modal" data-target="#postlist_view<?php $get_post_data['post_id'];?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>


         <a href="postedit.php?pedit_id=<?php echo $get_post_data['post_id']; ?>" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

          <a href="postlist.php?postlist_delid=<?php echo $get_post_data['post_id']; ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

         </td>

 <!--------------------------------------------------------------------------------------------->
<!-------------------------------------------action  option-------------------------------->
<!--------------------------------------------------------------------------------------------->
         </tr><!-------table/row------------->


<!--------------------------------------------------------------------------------------------->
<!-------------------------------------------modal   option------------------------------------>
<!--------------------------------------------------------------------------------------------->
<!-- Modal -->
<div class="modal fade" id="postlist_view<?php $get_post_data['post_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Post List Option</h4>
      </div>
      <div class="modal-body">
      	<?php 
      	$postlist_name = "SELECT * FROM tb_mvc_365_pages WHERE   page_id='".$get_post_data['post_page_id']."'";
      	$result_postlist = $DB->select($postlist_name);
      	if($result_postlist){
      		$data_postlist = $result_postlist->fetch_array();}
      		echo '<b>page name :<b>'.$data_postlist['page_name'].'<br/>';
      		echo '<b>page Title :<b>'.$get_post_data['post_title'].'<br/>';
      	?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------->
<!--------------------------------------modal start ------------------------------------->
<!--------------------------------------------------------------------------------------->
<?php 
        }//end of while...
    }//end of if..
?>

                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>



            </div>




        </div>
       <!--END PAGE CONTENT -->


    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
     <!-- END PAGE LEVEL SCRIPTS -->
</body>
     <!-- END BODY -->
</html>
