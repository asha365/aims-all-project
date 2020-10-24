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
                            <?php  if(isset($_GET['msg'])){ echo $_GET['msg']; } ?>
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
                                                <?php echo $pages_data['page_position']; ?>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="...">
<?php 
    if($pages_data['page_status']==0){ /*page status filtering start..*/
?>
        <button type="button" class="btn btn-info btn-xs">ON</button>
        <button type="button" class="btn btn-default btn-xs">OFF</button>
<?php 
    }else{
?>
        <button type="button" class="btn btn-default btn-xs">ON</button>
        <button type="button" class="btn btn-info btn-xs">OFF</button>
<?php         
    }/*page status filtering end..*/
?>

                                                </div>
                                            </td>
                                            <td class="center" style="text-align: center;">
                                                <a href="category.php?cat_edid=<?php echo $pages_data['page_id']; ?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                                <a href="category.php?cat_delid=<?php echo $pages_data['page_id']; ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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

<?php 
    if(isset($cat_edit_info_data)){
?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Category !
                        </div>
                        <div class="panel-body">
<form class="form" method="post" action="category.php">
    <input type="hidden" name="category_id" value="<?php echo $cat_edit_info_data['category_id']; ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input name="category_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name" value="<?php if(isset($cat_edit_info_data)){ echo $cat_edit_info_data['category_name']; } ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tags</label>
    <textarea name="category_tags" class="form-control" rows="2" placeholder="Enter Tags Name !"><?php if(isset($cat_edit_info_data)){ echo $cat_edit_info_data['category_tags']; } ?></textarea>
  </div>
  <button name="category_update" type="submit" class="btn btn-warning">Update Category</button>
</form>
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
<form class="form" method="post" action="category.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Page Name</label>
    <input name="page_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Page Position</label>
    <select class="form-control" name="page_position">
        <option value="">Select Page Position !</option>
        <option value="Top Menu">Top Menu</option>
        <option value="Top Sub-Menu">Top Sub-Menu</option>
        <option value="Top Left Menu">Top Left Menu</option>
        <option value="Top Right Menu">Top Right Menu</option>
        <option value="Top Footer Menu">Top Footer Menu</option>
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