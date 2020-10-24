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
                        <h1 class="page-header" style="font-weight: bold; ">Category Options 
                            <a class="pull-right btn btn-sm btn-primary" href="category.php"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
                            <?php  if(isset($_GET['msg'])){ echo $_GET['msg']; } ?>
                        </h1>
                    </div>
                </div>

                <hr />


                <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Category in Data Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Category Name</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<!-------------------------------------------------------------------->
<!-------------------------------------------------------------------->
<?php 
    $category_qry = "SELECT * FROM tb_mvc_365_category"; 
    $category_result = $DB->select($category_qry); 
    if($category_result){
        $sl=0; 
        while($category_data = $category_result->fetch_array()){
            $sl++; 
?>
                                        <tr class="gradeX">
                                            <td><?php echo $sl; ?></td>
                                            <td><?php echo $category_data['category_name']; ?></td>
                                            <td style="text-align: center; "><?php 
                                             if($category_data['category_status']==1){
?>
<div class="btn-group" role="group" aria-label="...">
  <a href="category.php?cat_st_idon=<?php echo $category_data['category_id']; ?>" type="button" class="btn btn-xs btn-info">ON</a>
  <a type="button" class="btn btn-xs btn-default">OFF</a>
</div>
<?php }else{ ?>
<div class="btn-group" role="group" aria-label="...">
  <a type="button" class="btn btn-xs btn-default">ON</a>
  <a href="category.php?cat_st_idoff=<?php echo $category_data['category_id']; ?>" type="button" class="btn btn-xs btn-info">OFF</a>
</div>
<?php } ?>
                                            </td>
                                            <td class="center" style="text-align: center;">
                                                <a href="category.php?cat_edid=<?php echo $category_data['category_id']; ?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                                <a href="category.php?cat_delid=<?php echo $category_data['category_id']; ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
                            Add New Category !
                        </div>
                        <div class="panel-body">
<form class="form" method="post" action="category.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input name="category_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tags</label>
    <textarea name="category_tags" class="form-control" rows="2" placeholder="Enter Tags Name !"></textarea>
  </div>
  <button name="category_save" type="submit" class="btn btn-primary">Add Category</button>
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