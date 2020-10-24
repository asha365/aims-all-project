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
                        <h1 class="page-header" style="font-weight: bold; ">Page Options 
                            <a class="pull-right btn btn-sm btn-primary" href="pages.php"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
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
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pages in Data Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Page Name</th>
                                            <th>Position</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<!-------------------------------------------------------------------->
<!-------------------------------------------------------------------->
<?php 
    $pages_qry = "SELECT * FROM tb_mvc_365_pages"; 
    $pages_result = $DB->select($pages_qry); 
    if($pages_result){
        $sl=0; 
        while($pages_data = $pages_result->fetch_array()){
            $sl++; 
?>
                                        <tr class="gradeX">
                                            <td><?php echo $sl; ?></td>
                                            <td><?php echo $pages_data['page_name']; ?></td>
                                            <td style="text-align: center; ">
                                                <?php echo str_replace('_', ' ', $pages_data['page_position']); ?>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="...">
<?php 
    if($pages_data['page_status']==0){ /*page status filtering start..*/
?>
  <a href="?pages_site_on=<?php echo $pages_data['page_id']; ?>" type="button" class="btn btn-xs btn-info">ON</a>
        <button type="button" class="btn btn-default btn-xs">OFF</button>
<?php 
    }else{
?>
        <button type="button" class="btn btn-default btn-xs">ON</button>
        <a href="?page_off_site=<?php echo $pages_data['page_id'];?>" type="button" class="btn btn-info btn-xs">OFF</a>
<?php         
    }/*page status filtering end..*/
?>

                                                </div>
                                            </td>
                                            <td class="center" style="text-align: center;">
                                                <a href="pages.php?pageseditid=<?php echo $pages_data['page_id']; ?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                                <a href="pages.php?pages_deleteid=<?php echo $pages_data['page_id']; ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                            </td>
                                        </tr>
<?php             
        }//end of while....        
    }//end of if...
?>
<!-------------------------------------------------------------------->

  <!--
                                        <tr class="gradeU">
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td class="center">-</td>
                                            <td class="center">U</td>
                                        </tr>
-->
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
<!------------------------------------------------------------------------->

<?php /* page edit start*/
    if(isset($page_d_edit)){
?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Pages !
                        </div>
                        <div class="panel-body">
    <!-------------------------------------------------------------------->
     <!------------------pages form edit  start---------------------------->
     <!-------------------------------------------------------------------->

<form class="form" method="post" action="pages.php">
    <input type="hidden" name="pages_update_id" value="<?php echo $page_d_edit['page_id']; ?>">

  <div class="form-group">
    <label for="exampleInputEmail1">Page Name</label>
    <input name="page_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name" value="<?php if(isset($page_d_edit)){ echo $page_d_edit['page_name']; } ?>">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Page Position</label>
    <select class="form-control" name="page_position">
        <!----------------------------------------------------->
        <option value="">Select Page Position !</option>
        <option value="Top_Menu" <?php if($page_d_edit['page_position'] == 'Top_Menu' ){ echo 'selected'; } ?> >Top Menu</option>
        <option value="Top_Sub_Menu" <?php if($page_d_edit['page_position'] == 'Top_Sub_Menu' ){ echo 'selected'; } ?> >Top Sub Menu</option>
        <option value="Top_Left_Menu" <?php if($page_d_edit['page_position'] == 'Top_Left_Menu' ){ echo 'selected'; } ?> >Top Left Menu</option>
        <option value="Top_Right_Menu" <?php if($page_d_edit['page_position'] == 'Top_Right_Menu' ){ echo 'selected'; } ?> >Top Right Menu</option>
        <option value="Top_Footer_Menu" <?php if($page_d_edit['page_position'] == 'Top_Footer_Menu' ){ echo 'selected'; } ?> >Top Footer Menu</option>
        <!----------------------------------------------------->
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"> Page Tags</label>
    <textarea name="page_tags" class="form-control" rows="2" placeholder="Enter Tags Name !"><?php if(isset($page_d_edit)){ echo $page_d_edit['page_tags']; } ?></textarea>
  </div>
  <button name="pages_update" type="submit" class="btn btn-warning">Page Edit</button>
</form>

    <!-------------------------------------------------------------------->
     <!------------------pages form edit  end---------------------------->
     <!-------------------------------------------------------------------->
                        </div>
                    </div>
<?php 
    }else{
?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add New Pages !
                        </div>
                        <div class="panel-body">
<form class="form" method="post" action="pages.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Page Name</label>
    <input name="page_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Page Position</label>
    <select class="form-control" name="page_position">
        <option value="">Select Page Position !</option>
        <option value="Top_Menu">Top Menu</option>
        <option value="Top_Sub_Menu">Top Sub Menu</option>
        <option value="Top_Left_Menu">Top Left Menu</option>
        <option value="Top_Right_Menu">Top Right Menu</option>
        <option value="Top_Footer_Menu">Top Footer Menu</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Tags</label>
    <textarea name="page_tags" class="form-control" rows="3" placeholder="Enter Tags Name !"></textarea>
  </div>
  <button name="page_save" type="submit" class="btn btn-primary">Add Page</button>
</form>
                        </div>
                    </div>  
<?php         
    }
?>                    
                  
<!------------------------------------------------------------------------->
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